
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

# Images
## **Show All Image**
Show All Images

* **URL**

  _http://127.0.0.1:8000/api/images/_

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
                  "name": "S23 Ultra",
                  "file": "https://images.samsung.com/id/smartphones/galaxy-s23-ultra/buy/kv_online_exclusive_PC.jpg",
                  "enable": true,
                  "created_at": "2023-02-13T17:00:57.000000Z",
                  "updated_at": "2023-02-13T17:00:57.000000Z"
              },
              {
                  "id": 2,
                  "name": "The Alchemist",
                  "file": "https://www.booksbeyond.co.id/image/cache/catalog/1632111032-550x550w.png.webp",
                  "enable": true,
                  "created_at": "2023-02-13T17:00:57.000000Z",
                  "updated_at": "2023-02-13T17:00:57.000000Z"
              }
          ],
          "first_page_url": "http://127.0.0.1:8000/api/images?page=1",
          "from": 1,
          "last_page": 1,
          "last_page_url": "http://127.0.0.1:8000/api/images?page=1",
          "links": [
              {
                  "url": null,
                  "label": "&laquo; Previous",
                  "active": false
              },
              {
                  "url": "http://127.0.0.1:8000/api/images?page=1",
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
          "path": "http://127.0.0.1:8000/api/images",
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
 

## **Create a New Image**
Add a new images

* **URL**

  _http://127.0.0.1:8000/api/images/_

* **Method**

  `POST`

* **Data Body**
  **Required:**

  `name=[string]`
  
  `file=[file]`

  `enable=[boolean]`

* **Success Response:**
  * **Code:** 201
  * **Content:** 
    ```javascript
   {
        "status": "success",
        "data": {
            "name": "image",
            "file": "image_1676349995.png",
            "enable": "true"
        },
        "message": "Image created successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 422
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The file must not be greater than 500 kilobytes."
    }
    ```

## **Update Image by Id** 
Edit image by id

* **URL**

  _http://127.0.0.1:8000/api/images/:id_

* **Method**

    `POST`

* **URL Params**
  **Required:**

  `id:[integer]`

* **Data Body**
  **Required:**

  `name=[string]`
  
  `file=[file]`

  `enable=[boolean]`

  `_method=PUT`

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "name": "image name",
            "file": "image_1676350949.jpg",
            "enable": "true"
        },
        "message": "Image updated successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 422
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The file field is required."
    }
    ```


## **Delete image by Id**
Delete image by id 

* **URL**

  _http://127.0.0.1:8000/api/images/:id_

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
          "id": 3,
          "name": "Macbook",
          "file": "https://images.samsung.com/id/smartphones/galaxy-s23-ultra/buy/kv_online_exclusive_PC.jpg",
          "enable": true,
          "created_at": "2023-02-13T22:52:20.000000Z",
          "updated_at": "2023-02-13T22:56:20.000000Z"
      },
      "message": "Image deleted successfully"
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

# Product Image

## **Show All Product Images**
Show All Product Images

* **URL**

  _http://127.0.0.1:8000/api/product_image/_

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
                  "image_id": 2,
                  "created_at": "2023-02-13T17:00:57.000000Z",
                  "updated_at": "2023-02-13T17:00:57.000000Z",
                  "image": {
                      "id": 2,
                      "name": "The Alchemist",
                      "file": "https://www.booksbeyond.co.id/image/cache/catalog/1632111032-550x550w.png.webp",
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
          "first_page_url": "http://127.0.0.1:8000/api/product_image?page=1",
          "from": 1,
          "last_page": 1,
          "last_page_url": "http://127.0.0.1:8000/api/product_image?page=1",
          "links": [
              {
                  "url": null,
                  "label": "&laquo; Previous",
                  "active": false
              },
              {
                  "url": "http://127.0.0.1:8000/api/product_image?page=1",
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
          "path": "http://127.0.0.1:8000/api/product_image",
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
 

## **Create a New Product Image**
Add a new Product Image

* **URL**

  _http://127.0.0.1:8000/api/product_image/_

* **Method**

  `POST`

* **Data Body**
  **Required:**

  `product_id=[integer]`
  
  `image_id=[integer]`

* **Success Response:**
  * **Code:** 201
  * **Content:** 
    ```javascript
    {
        "status": "success",
        "data": {
            "product_id": 2,
            "image_id": 1,
            "updated_at": "2023-02-13T23:08:31.000000Z",
            "created_at": "2023-02-13T23:08:31.000000Z",
            "id": 3
        },
        "message": "Product Image created successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 500
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The selected product id is invalid."
    }
    ```

## **Update Product Image by Id** 
Edit a product image by id

* **URL**

  _http://127.0.0.1:8000/api/product_image/:id_

* **Method**

    `PUT`

* **URL Params**
  **Required:**

  `id:[integer]`

* **Data Body**
  **Required:**

  `product_id=[integer]`

  `image_id=[integer]`

* **Success Response:**
  * **Code:** 200
  * **Content:** 
    ```javascript
    {
      "status": "success",
      "data": {
          "id": 3,
          "product_id": 3,
          "image_id": 1,
          "created_at": "2023-02-13T23:08:31.000000Z",
          "updated_at": "2023-02-13T23:11:14.000000Z"
      },
      "message": "Product Image updated successfully"
    }
    ```

    OR

* **Error Response:**
  * **Code:** 422
  * **Content:** 
    ```javascript
    {
        "status": "error",
        "message": "The product id has already been taken."
    }
    ```


## **Delete product image by Id**
Delete product image by id 

* **URL**

  _http://127.0.0.1:8000/api/product_image/:id_

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
            "id": 3,
            "product_id": 3,
            "image_id": 1,
            "created_at": "2023-02-13T23:08:31.000000Z",
            "updated_at": "2023-02-13T23:11:14.000000Z"
        },
        "message": "Product Image deleted successfully"
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
