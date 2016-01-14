<md-content layout="row" layout-padding>
    <md-whiteframe class="md-whiteframe-1dp" flex>

        <div ng-if="! profile">
            Loading
        </div>

        <div ng-if="profile">
            <h1>
                <md-icon>
                    account_circle
                </md-icon>
                Profile
            </h1>
            <p>
                Name: {{ profile.name }}
            </p>
            <p>
                Email: {{ profile.email }}
            </p>
            <p>
                Created at: {{ profile.created_at }}
            </p>
        </div>

    </md-whiteframe>
</md-content>
