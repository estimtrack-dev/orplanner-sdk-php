
# Orplanner SDK Library

To set up dev env follow https://medium.com/@francismacugay/build-your-own-laravel-package-in-10-minutes-using-composer-867e8ef875dd

You need to have packages folder and have the project there. 
Also make sure you import it in the composer of the parent project:

````
    "autoload-dev": {
        "psr-4": {
            "Tests\\": "tests/",
            "Estimtrack\\Orplannersdkphp\\": "packages/estimtrack/orplannersdkphp/src"
        }
    },
````
