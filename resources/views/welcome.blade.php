<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="[% csrf_token() %]">

        <base href="/">

        <title>Laravel</title>

        <link rel="stylesheet" href="[% asset('css/all.css') %]">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <script src="[% asset('js/app.js') %]"></script>

    </head>

    <body ng-app="app" ng-controller="ApplicationController" ng-cloak>

        <toolbar></toolbar>

        <sidenav></sidenav>

        <ng-view></ng-view>

    </body>

</html>
