# Answers

This is a collection of answers to all sorts of questions regarding Uniform that popped up over the time. If you still have questions [post an issue](https://github.com/mzur/kirby-uniform/issues) if you think it is a bug or create a topic in [the forum](https://forum.getkirby.com/) if you need help (be sure to use the `uniform` tag or mention `@mzur`).

## How can I send an HTML email?

How an email is sent within Kirby is defined by email services. For an HTML email you can implement a service like [this one](https://github.com/mzur/kirby-uniform/issues/7#issuecomment-68592134) and then configure the email action to [use it](actions/email#service).

## Can Uniform be used with AJAX?

Yes, see the [AJAX example](examples/ajax).

## When I submit a correctly filled out form, all data vanishes and nothing happens. What is going wrong?

Check if the HTTP request for submitting the form is redirected. Some server configurations will redirect a request e.g. from `example.com/form` to `example.com/form/` during which all form data is lost. Try changing your form's action URL from `<?php echo $page->url() ?>` to `<?php echo $page->url() ?>/`.

## Can I use a redirect when the form is submitted successfully?

Yes, just add this to your controller code after Uniform executed the actions:

```php
if (r::is('POST')) {
    // execute Uniform actions

    if ($form->success()) {
        go('/my-uri');
    }
}
```

## Can I work with the submitted form data outside of Uniform snippets?

Sure, since the form data is submitted with an ordinary `POST` request you can access the value of a field with name `myfield` anywhere in your code using the [`get` Kirby helper](https://getkirby.com/docs/cheatsheet/helpers/get) `get('myfield')`. If you have access to the `$form` object, you can use the [data method](methods#datakey-value), too.

## I have multiple static forms on one page. When one fails the error messages are also displayed for the other forms. Why?

This happens because the forms share the same session storage by default. In this case you have to give each form a unique session storage. You can do that with the second parameter of the `Form` constructor:

```php
<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $contactForm = new Form([/* rules */], 'contact-form');
    $newsletterForm = new Form([/* rules */], 'newsletter-form');

    if (r::is('POST')) {
        if (/* contact form sent */) {
            $contactForm->emailAction([
                'to' => 'me@example.com',
                'from' => 'info@example.com',
            ]);
        } elseif (/* newsletter form sent */) {
            $newsletterForm->emailAction([
                'to' => 'me@example.com',
                'from' => 'info@example.com',
            ]);
        }
    }

    return compact('form');
};
```
