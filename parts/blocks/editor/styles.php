<?php

echo '<!--<link rel="stylesheet" href="https://use.typekit.net/mjd0yzh.css">--><!--imports the fonts into the editor-->';
$version=filemtime(get_template_directory().'/assets/styles/style.css');
echo '<link rel="stylesheet" type="text/css" href="'.get_template_directory_uri().'/assets/styles/style.css?v='.$version.'"/>';
?>
<style>
    /*.slick-button {
        font-size: 40px;
        !*width: auto;*!
        !*height: 3em;*!
    }
    .slick-button:after {
        !*height: 3em;*!
    }
    @media screen and ( min-width: 768px ) {
        .edit-post-visual-editor .editor-post-title,
        .edit-post-visual-editor .editor-block-list__block {
            max-width:	1260px;
        }
    }

    .grid-container {
        max-width: 1260px;
    }*/
    ul {
        list-style: none;
    }

    ul.wp-submenu {
        margin-left: 0;
    }

    a.round-button {
        color: $ body-font-color;
        border: 1px solid $ body-font-color;
        padding-top: 0.5em;
        padding-bottom: 0.5em;
        border-radius: 1.75em;
        padding-left: 1em;
        padding-right: 2em;
        line-height: 1;
        position: relative;
    }
    a.round-button:after {
         content: ">";
         position: absolute;
         padding-top: 0.5em;
         padding-bottom: 0.5em;
         padding-right: 1em;
         line-height: 1;
         right: 0;
         top: 0;
     }
    a.round-button:hover {
         color: $white;
         background-color: $blue;
         border: 1px solid $blue;
     }

</style>