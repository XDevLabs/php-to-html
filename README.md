## PHP to HTML project

This is an HTML project, based in PHP for including the files for quick publish the HTML files

## Install

+ Run `yarn` to install dependency
+ Run `yarn watch` to watch SCSS files changed
+ Run `yarn build` to compress the CSS file
+ Run `./build.sh version_name` to build HTML files

## Files & Folders

- `assets` contain SCSS, CSS, Images, JS files
- `includes` contain included PHP functions file
- `templates` contain part of PHP files you can call the PHP files in this folder by `template_parts` function with an
  array variable params.
- `build.sh` to generate HTML files in `./build` folder
- `package.json`

## Usage

Just clone and do whatever you want with `PHP` and `SCSS` files

For example, I have a template named `templates/list-post.php`

```PHP
<?php
template_part('list-post', [
    'data' => [
        [
            'title' => 'post 1',
            'description' => 'Description 1'
        ],
        [
            'title' => 'post 2',
            'description' => 'Description 2'
        ],
        [
            'title' => 'post 3',
            'description' => 'Description 3'
        ]
    ]
])
?>
```

In template file `templates/list-post.php` can use

```PHP
if (isset($data)) {
    foreach ($data as $datum) {
        echo $datum['title'];
        echo $datum['description'];
    }
}
```

### Contact developer

Email: `kiemhd@outlook.com`
