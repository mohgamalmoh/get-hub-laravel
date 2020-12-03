# README
The idea of this project is to implement a backend application for discovering popular
repositories on GitHub created from a specified date and could be filtered by language.

##Clone this repository.

```console
$ git clone https://github.com/mohgamalmoh/get-hub-laravel.git
$ cd get-hub-laravel/
```

##Up Docker container.

```console
$ docker-compose up
```


##We have one endpoint to retrieve the most popular repos created from the date defined in app/config/application.yml

We can change this date as a configuration value to be injected 
to the app in runtime so that we don't need to change the date 
through code editing.

 ```console
#/.env

 GITHUB_REPOS_CREATED_FROM=2018-12-12
 ```

##This is an example of an endpoint, we have two possible parameters

1- "lang" to filter the repos by the language

2- "top_count" to limit the number of repos returned, we can set it 
    to 10, 50 or 100.
 ```console
http://localhost:8000/repositories/popular?lang=java&top_count=50
 ```
