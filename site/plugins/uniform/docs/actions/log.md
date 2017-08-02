# Log Action

This action appends the form data and some information on the submitter to a log file.

## Example

### Controller

```php
<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'email' => [
            'rules' => ['required', 'email'],
            'message' => 'Email is required',
        ],
        'message' => [
            'rules' => ['required'],
            'message' => 'Message is required',
        ],
    ]);

    if (r::is('POST')) {
        $form->logAction([
            'file' => kirby()->roots()->site().'/messages.log',
        ]);
    }

    return compact('form');
};
```

### Template

```html+php
<form method="POST">
    <input name="email" type="email" value="<?php echo $form->old('email') ?>">
    <textarea name="message"><?php echo $form->old('message') ?></textarea>
    <?php echo csrf_field() ?>
    <?php echo honeypot_field() ?>
    <input type="submit" value="Submit">
</form>
```

### Log entry

```
[2016-12-20T09:16:18+00:00] 127.0.0.1 Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:37.0) Gecko/20100101 Firefox/51.0
email: joe@user.com
message: This is a test submission.
```

## Options

### file (required)

Path to the log file where the form data should be appended to. The file will be created if it doesn't exist.

!!! warning "Note"
    The action will fail if the parent directory of the log file does not exist.

### snippet

By default the action lists all form fields with their values along with some information on the submitter of the form in each log entry (see [above](log-entry)). To customize the format you can also supply the name of a snippet in this option. Inside the snippet you have access to the `$data` array, which is a plain associative array containing the form data, and the `$options` array which is the options array that you passed on to the log action.
