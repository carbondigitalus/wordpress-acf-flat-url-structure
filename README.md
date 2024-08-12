# WordPress ACF Flat URL Structure

When using ACF, via plugin or with PHP code, this will help you get a flat URL structure from your CPTs.

## SEO Implication

Each subdirectory of your website, will increase your required efforts to achieve the same results. The example below does not use exact numbers, but the premise is the same. If the scale for each subdirectory was 10, the example below would be the math.

Pathname = /lawn-care
<br />
SEO Effort = 1

Pathname = /location/lawn-care
<br />
SEO Effort = 1x10

Pathname = /location/charlotte/lawn-care
<br />
SEO Effort = 1x10x10

Pathname = /location/north-carolina/charlotte/lawn-care
<br />
SEO Effort = 1x10x10x10

## ACF Plugin Settings

Here is our settings using the ACF plugin. You will want to make sure that your plugin settings are the same, or that your code solution matches this setup.

<img width="895" alt="image" src="https://github.com/user-attachments/assets/965cc488-0a88-47c6-a5a4-0e272cca7ad1">

## Custom PHP Code

Using our code, paste it in your `functions.php` file, or using a custom code plugin. We use Advanced Scripts, but something like Code Snippets would also work.

### Update Code Before You Use It

The below snippet needs to be updated to cover all of the CPT slugs that you want this to be applied to. EACH FUNCTION has this snippet. Make sure you update both functions.

```php
$post_types = ['service', 'product'];
```

## Versions 

WordPress - 6.5.5
<br />
ACF - 6.3.5
<br />
Advanced Scripts - 2.5.2
