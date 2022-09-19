
# Orplanner SDK Library




### Installation
add me in the composer of your project
````
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/estimtrack-dev/orplanner-sdk-php"
    }
]
````

Add me on the require:
````
    "estimtrack/orplannersdkphp": "^1.0.0"
````
and run:
````
composer update
````

### Usage

Check the Feature tests for more info

### Dev env



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


