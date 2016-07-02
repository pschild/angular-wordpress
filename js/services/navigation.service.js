app.factory('NavigationService', function($http) {
    return {
        loadAllMenus: function() {
            return $http.get('wp-json/menus/v1/menus');
        },

        loadMenuByName: function(name) {
            return $http.get('wp-json/menus/v1/menus/' + name);
        }
    };
});