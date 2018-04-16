var config = {

    paths: {
        'validate': 'Watermelon_WholesaleContact/js/validate'
    },

    //when load requirejs will load following files also
    deps: [
        "Watermelon_WholesaleContact/js/wholesalecontact" //path to our main.js file. .js extension is not required.
    ],

    shim: {
        'validate' :
            {
                deps: ['jquery']
            }
    }
}