<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title_for_layout; ?></title>
<?php
echo $this->Html->meta('icon');
echo $this->Html->css(array('reseter', 'base', 'default'));
echo $this->Html->script(array('jquery-1.4.2.min', 'default'));
echo $scripts_for_layout;
?>
</head>
<body>
<div>
<?php
echo $this->element('ie6_warning');
echo $this->Session->flash();
echo $content_for_layout;
?>
</div>
</body>
</html>