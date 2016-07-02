app.factory('PageService', function($http) {
    return {
        loadAllPages: function() {
            return $http.get('wp-json/wp/v2/pages');
        },

        loadPageById: function(id) {
            return $http.get('wp-json/wp/v2/pages/' + id);
        }
    };
});