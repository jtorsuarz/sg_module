<!DOCTYPE html>
<html lang='en'>
<head>
    <title>
        <?=$this->renderSection('title')?>&nbsp;-&nbsp; Frontraining
    </title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <?=$this->include('layout/headLinks')?>
</head>
<body>
<?=$this->include('layout/Navs/navTop')?>

<?=$this->include('layout/Navs/navSideBar')?>

<?=$this->renderSection('content')?>

<?=$this->include('layout/footerLinks')?>

<?=$this->renderSection('linksNeed')?>

</body>
</html>