# Laravel_test


## uitleg 

## endpoints

------------------------------------------------------------------------------------------

<details>
 <summary><code>GET</code> <code><b>/</b></code> <code> get blogs </code></summary>

##### example url
 ``` /blogs?perPage=10&page=1 ```
##### example response 
 ```json
        {
            "title": "Ullam maxime et soluta non molestiae.",
            "author": "Prof. Eula Bergstrom",
            "content": "Et aut dicta distinctio rerum et sapiente. Error placeat molestiae culpa repellat. Impedit rerum voluptatum atque sed distinctio aperiam. Animi natus quaerat sit qui molestiae.",
            "publicatie datum": "2024-01-22"
        },
        {
            "title": "Eius saepe occaecati excepturi pariatur corporis velit sit.",
            "author": "Dr. Anastacio Mitchell",
            "content": "Unde vel quod hic quasi itaque eos. Sint voluptas quas ex dolorem. Dolores optio voluptatem enim hic.",
            "publicatie datum": "2023-07-25"
        },
     
```
##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON string                                                         |

####################################################


</details>


<details>
 <summary><code>GET</code> <code><b>/</b></code> <code> get blog by id </code></summary>

##### Parameters

> None

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON string                                                        |
</details>

</details>


<details>
 <summary><code>GET</code> <code><b>/</b></code> <code> get published blog count </code></summary>

##### example url
 ``` /blogs_per_month ```

##### example response
```json {
    "blogs": {
        "2023-05": 3,
        "2023-07": 4,
        "2023-08": 1,
        "2023-09": 5,
        "2023-10": 3,
        "2023-11": 2,
        "2023-12": 2,
        "2024-01": 4,
        "2024-02": 4,
        "2024-03": 2,
        "2024-05": 6,
        "2033-05": 1
    }
}
```

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON string                                                        |


</details>

<details>
 <summary><code>POST</code> <code><b>/</b></code> <code> post blog </code></summary>
##### example url
 ``` /blog ```
##### example body 

```json
   {
            "title": "posttest",
            "author": "posttest",
            "content": "posttest",
            "publication_date": "2063-05-07"
}
```

##### Responses

> | http code     | content-type                      | response                                                            |
> |---------------|-----------------------------------|---------------------------------------------------------------------|
> | `200`         | `text/plain;charset=UTF-8`        | JSON string                                                        |


</details>


------------------------------------------------------------------------------------------
=======




## 

created a simple sqlite db
created the models
```php artisan make:model Blog```

```artisan make:model Author```

php artisan tinker

