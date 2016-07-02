<!DOCTYPE html>
<html ng-app="app">
<head>
    <base href="<?php echo site_url();?>/">
    <title>angular-pschild</title>
    <?php wp_head(); ?>
</head>
<body>

<nav ng-controller="NavigationCtrl">
    <ul>
        <li ng-repeat="item in mainNavItems">
            <a ng-href="page/{{item.object_id}}">{{ item.title }}</a>
        </li>
    </ul>
</nav>

<div ng-view></div>

</body>
</html>