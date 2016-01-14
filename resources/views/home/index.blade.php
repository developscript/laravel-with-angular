<md-content layout="row" layout-padding>
    <md-whiteframe class="md-whiteframe-1dp" flex>

    <h1>
        <md-icon>home</md-icon>
        Home
    </h1>

    <p ng-if="check()">
        You're logged in.
    </p>
    <p ng-if="! check()">
        You're logged out.
    </p>

    </md-whiteframe>
</md-content>
