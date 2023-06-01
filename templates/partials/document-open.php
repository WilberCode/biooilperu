<!doctype html>
<html lang="ES" class="no-js">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_get_document_title() ?></title>  
    <script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
     
    <?php wp_head();?>  

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N83HVR51RJ"></script>
    <script>
        window.onload = function(){
        setTimeout(function(){
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-N83HVR51RJ'); 
          },3000)
        }
    </script>
  
</head>
<body <?php body_class()  ?> > 