
# Framework :

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Clone the repository

# Install Dependencies

Rename .env.example file to .env inside project root and complete the config as database name based on local

Run `composer install`

Run `php artisan key:generate`

Run `php artisan migrate`

Run `php artisan db:seed`

Run `php artisan serve`

# API Documentation

Default URL = http://127.0.0.1:8000

# Product

## **Show All Products**
Show All Products

* **URL**

  _http://127.0.0.1:8000/api/products/_

* **Method**

  `GET`

* **Data Body**

  None

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
    "status": "success",
    "data": {
        "current_page": 1,
        "data": [
            {
                "id": 2,
                "name": "The Alchemist",
                "description": "Paulo Coelho's masterpiece tells the mystical story of Santiago, an Andalusian shepherd boy who yearns to travel in search of a worldly treasure.",
                "created_at": "2023-02-13T17:00:57.000000Z",
                "updated_at": "2023-02-13T17:00:57.000000Z"
            }
        ],
        "first_page_url": "http://127.0.0.1:8000/api/products?page=1",
        "from": 1,
        "last_page": 1,
        "last_page_url": "http://127.0.0.1:8000/api/products?page=1",
        "links": [
            {
                "url": null,
                "label": "&laquo; Previous",
                "active": false
            },
            {
                "url": "http://127.0.0.1:8000/api/products?page=1",
                "label": "1",
                "active": true
            },
            {
                "url": null,
                "label": "Next &raquo;",
                "active": false
            }
        ],
        "next_page_url": null,
        "path": "http://127.0.0.1:8000/api/products",
        "per_page": 10,
        "prev_page_url": null,
        "to": 1,
        "total": 1
        }
    }

    ```

    OR

* **Error Response:**
  * **Code:** 404
  * **Content:** 
    ```javascript
    {
        "status": "error"
    }
    ```
 

## **Create a New Product**
Add a new product

* **URL**

  _http://127.0.0.1:8000/api/products/_

* **Method**

  `POST`

* **Data Body**
  **Required:**

  `name=[string]`
  
  `description=[string]`

* **Success Response:**
  * **Code:** 201
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "name": "Laptop",
            "description": "Macbook Air 2015 13inch 128GB",
            "updated_at": "2023-02-13T21:33:10.000000Z",
            "created_at": "2023-02-13T21:33:10.000000Z",
            "id": 3
        },
        "message": "Product created successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 422
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The name field is required."
    }
    ```

## **Update Product by Id** 
Edit a product by id

* **URL**

  _http://127.0.0.1:8000/api/products/:id_

* **Method**

    `PUT`

* **URL Params**
  **Required:**

  `id:[integer]`

* **Data Body**
  **Required:**

  `name=[string]`

  `description=[string]`

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "id": 4,
            "name": "Notebook",
            "description": "Macbook Air 2015 13inch 128GB",
            "created_at": "2023-02-13T21:35:48.000000Z",
            "updated_at": "2023-02-13T21:39:05.000000Z"
        },
        "message": "Product updated successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 422
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The description field is required."
    }
    ```


## **Delete product by Id**
Delete a product by id 

* **URL**

  _http://127.0.0.1:8000/api/products/:id_

* **Method**

  `DELETE`

* **URL Params**
  **Required:**
  
  `id=[integer]`

* **Data Body**

  None

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
      {
        "status": "success",
        "data": {
            "id": 4,
            "name": "notebook",
            "description": "Macbook Air 2015 13inch 128GB",
            "created_at": "2023-02-13T21:35:48.000000Z",
            "updated_at": "2023-02-13T21:39:05.000000Z"
        },
        "message": "Product deleted successfully"
      }
    ```

    OR

* **Error Response:**
  * **Code:** 404
  * **Content:** 
    ```javascript
    {
      "status": "error" 
    }
    ```

# Category

## **Show All Category**
Show All Categories

* **URL**

  _http://127.0.0.1:8000/api/categories/_

* **Method**

  `GET`

* **Data Body**

  None

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "current_page": 1,
            "data": [
                {
                    "id": 1,
                    "name": "Handphone",
                    "enable": true,
                    "created_at": "2023-02-13T17:00:57.000000Z",
                    "updated_at": "2023-02-13T17:00:57.000000Z"
                },
                {
                    "id": 2,
                    "name": "Book",
                    "enable": true,
                    "created_at": "2023-02-13T17:00:57.000000Z",
                    "updated_at": "2023-02-13T17:00:57.000000Z"
                }
            ],
            "first_page_url": "http://127.0.0.1:8000/api/categories?page=1",
            "from": 1,
            "last_page": 1,
            "last_page_url": "http://127.0.0.1:8000/api/categories?page=1",
            "links": [
                {
                    "url": null,
                    "label": "&laquo; Previous",
                    "active": false
                },
                {
                    "url": "http://127.0.0.1:8000/api/categories?page=1",
                    "label": "1",
                    "active": true
                },
                {
                    "url": null,
                    "label": "Next &raquo;",
                    "active": false
                }
            ],
            "next_page_url": null,
            "path": "http://127.0.0.1:8000/api/categories",
            "per_page": 10,
            "prev_page_url": null,
            "to": 2,
            "total": 2
        }
    }

    ```

    OR

* **Error Response:**
  * **Code:** 404
  * **Content:** 
    ```javascript
    {
        "status": "error"
    }
    ```
 

## **Create a New Category**
Add a new category

* **URL**

  _http://127.0.0.1:8000/api/categories/_

* **Method**

  `POST`

* **Data Body**
  **Required:**

  `name=[string]`
  
  `enable=[boolean]`

* **Success Response:**
  * **Code:** 201
  * **Content:** 
    ```javascript
    {
      "status": "success",
      "data": {
          "name": "Laptop",
          "enable": "true",
          "updated_at": "2023-02-13T22:28:26.000000Z",
          "created_at": "2023-02-13T22:28:26.000000Z",
          "id": 3
      },
      "message": "Category created successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 500
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "There was some internal error, please check again the API"
    }
    ```

## **Update Product by Id** 
Edit a product by id

* **URL**

  _http://127.0.0.1:8000/api/categories/:id_

* **Method**

    `PUT`

* **URL Params**
  **Required:**

  `id:[integer]`

* **Data Body**
  **Required:**

  `name=[string]`

  `enable=[boolean]`

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
      "status": "success",
      "data": {
          "id": 4,
          "name": "Laptop",
          "enable": false,
          "created_at": "2023-02-13T22:29:30.000000Z",
          "updated_at": "2023-02-13T22:29:30.000000Z"
      },
      "message": "Category updated successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 422
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The name field is required."
    }
    ```


## **Delete category by Id**
Delete a category by id 

* **URL**

  _http://127.0.0.1:8000/api/categories/:id_

* **Method**

  `DELETE`

* **URL Params**
  **Required:**
  
  `id=[integer]`

* **Data Body**

  None

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "id": 4,
            "name": "Laptop",
            "enable": false,
            "created_at": "2023-02-13T22:29:30.000000Z",
            "updated_at": "2023-02-13T22:29:30.000000Z"
        },
        "message": "Category deleted successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 404
  * **Content:** 
    ```javascript
    {
      "status": "error" 
    }
    ```

# Category Product

## **Show All Category Product**
Show All Category Products

* **URL**

  _http://127.0.0.1:8000/api/category_product/_

* **Method**

  `GET`

* **Data Body**

  None

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
      "status": "success",
      "data": {
          "current_page": 1,
          "data": [
              {
                  "id": 2,
                  "product_id": 2,
                  "category_id": 2,
                  "created_at": "2023-02-13T17:00:57.000000Z",
                  "updated_at": "2023-02-13T17:00:57.000000Z",
                  "category": {
                      "id": 2,
                      "name": "Book",
                      "enable": true,
                      "created_at": "2023-02-13T17:00:57.000000Z",
                      "updated_at": "2023-02-13T17:00:57.000000Z"
                  },
                  "product": {
                      "id": 2,
                      "name": "The Alchemist",
                      "description": "Paulo Coelho's masterpiece tells the mystical story of Santiago, an Andalusian shepherd boy who yearns to travel in search of a worldly treasure.",
                      "created_at": "2023-02-13T17:00:57.000000Z",
                      "updated_at": "2023-02-13T17:00:57.000000Z"
                  }
              }
          ],
          "first_page_url": "http://127.0.0.1:8000/api/category_product?page=1",
          "from": 1,
          "last_page": 1,
          "last_page_url": "http://127.0.0.1:8000/api/category_product?page=1",
          "links": [
              {
                  "url": null,
                  "label": "&laquo; Previous",
                  "active": false
              },
              {
                  "url": "http://127.0.0.1:8000/api/category_product?page=1",
                  "label": "1",
                  "active": true
              },
              {
                  "url": null,
                  "label": "Next &raquo;",
                  "active": false
              }
          ],
          "next_page_url": null,
          "path": "http://127.0.0.1:8000/api/category_product",
          "per_page": 10,
          "prev_page_url": null,
          "to": 1,
          "total": 1
      }
    }
    ```

    OR

* **Error Response:**
  * **Code:** 404
  * **Content:** 
    ```javascript
    {
        "status": "error"
    }
    ```
 

## **Create a New Category Product**
Add a new category Product

* **URL**

  _http://127.0.0.1:8000/api/category_product/_

* **Method**

  `POST`

* **Data Body**
  **Required:**

  `product_id=[integer]`
  
  `category_id=[integer]`

* **Success Response:**
  * **Code:** 201
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "product_id": 2,
            "category_id": 1,
            "updated_at": "2023-02-13T22:29:40.000000Z",
            "created_at": "2023-02-13T22:29:40.000000Z",
            "id": 7
        },
        "message": "Category Product created successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 500
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The product id has already been taken."
    }
    ```

## **Update Category Product by Id** 
Edit a category product by id

* **URL**

  _http://127.0.0.1:8000/api/category_product/:id_

* **Method**

    `PUT`

* **URL Params**
  **Required:**

  `id:[integer]`

* **Data Body**
  **Required:**

  `product_id=[integer]`

  `category_id=[integer]`

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "id": 7,
            "product_id": 2,
            "category_id": 3,
            "created_at": "2023-02-13T21:29:40.000000Z",
            "updated_at": "2023-02-13T21:32:23.000000Z"
        },
        "message": "Category Product updated successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 422
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The product id field is required."
    }
    ```


## **Delete category product by Id**
Delete a category product by id 

* **URL**

  _http://127.0.0.1:8000/api/category_product/:id_

* **Method**

  `DELETE`

* **URL Params**
  **Required:**
  
  `id=[integer]`

* **Data Body**

  None

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "id": 7,
            "product_id": 2,
            "category_id": 3,
            "created_at": "2023-02-14T21:29:40.000000Z",
            "updated_at": "2023-02-14T21:32:23.000000Z"
        },
        "message": "Category Product deleted successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 404
  * **Content:** 
    ```javascript
    {
      "status": "error" 
    }
    ```




