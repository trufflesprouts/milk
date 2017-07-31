From 'assets/' compile styles by:

sass --watch sass:sassy-css
postcss --watch sassy-css/**/*.css --use precss autoprefixer --dir css --base sassy-css
