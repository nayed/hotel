'use strict'

// Declare app level module which depends on views, and components
angular.module('myApp', [
  'ngRoute',
  'myApp.view1',
  'myApp.view2',
  'myApp.version',
  'myApp.roomAdmin',
  'myApp.book',
  'myApp.finalize'
])
    .config(['$routeProvider', ($routeProvider) => {
      $routeProvider.otherwise({redirectTo: '/room_type'})
    }])

    .service('reservationData', () => {
        let hashtable = {}

        return {
            setValue: (key, value) => {
                hashtable[key] = value
            },
            getValue: (key) => {
                return hashtable[key]
            }
        }
    })