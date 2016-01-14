<div ng-if="! profile">
    Loading
</div>

<div ng-if="profile">
    <h1>
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
