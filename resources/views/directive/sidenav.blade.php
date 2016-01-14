<md-sidenav class="md-sidenav-left" md-component-id="left">

    <md-toolbar class="md-tall">
        <h2 class="md-toolbar-tools">
            <span>{{ title }}</span>
        </h2>
    </md-toolbar>

    <md-list>

        <md-list-item ng-href="/#/" ng-click="close()">
            <md-icon>home</md-icon>
            <p>Home</p>
        </md-list-item>

        <md-list-item ng-repeat="item in items" ng-href="{{ item.href }}" ng-click="close()" ng-show="item.token === check()">
            <md-icon>{{ item.icon }}</md-icon>
            <p>{{ item.name }}</p>
        </md-list-item>

    </md-list>
    
</md-sidenav>
