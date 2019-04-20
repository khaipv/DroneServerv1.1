---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_c5d300b6302d3550b2635e5135f8a09c -->
## Get product

> Example request:

```bash
curl -X GET -G "http://localhost/api/product/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":3,"$limit":6}'

```

```javascript
const url = new URL("http://localhost/api/product/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 3,
    "$limit": 6
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (200):

```json
{
    "message": "Product get error."
}
```

### HTTP Request
`GET api/product/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_c5d300b6302d3550b2635e5135f8a09c -->

<!-- START_52997dcadfa6cb82f038095a7146592f -->
## Display the product resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/product={id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":15}'

```

```javascript
const url = new URL("http://localhost/api/product={id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 15
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Product not found."
}
```

### HTTP Request
`GET api/product={id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | 

<!-- END_52997dcadfa6cb82f038095a7146592f -->

<!-- START_3b2a57b70398fcc1d4f8bf8dc779fa10 -->
## Get product with catagory

> Example request:

```bash
curl -X GET -G "http://localhost/api/product/cata={id}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"0gQNJ747xOl5E7pN","$page":5,"$limit":3}'

```

```javascript
const url = new URL("http://localhost/api/product/cata={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "0gQNJ747xOl5E7pN",
    "$page": 5,
    "$limit": 3
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Product get error."
}
```

### HTTP Request
`GET api/product/cata={id}&amp;page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id catagory
    $page | integer |  optional  | page
    $limit | integer |  optional  | pageSize

<!-- END_3b2a57b70398fcc1d4f8bf8dc779fa10 -->

<!-- START_1eef80a8b3d8845e7e1c4ed9f690602d -->
## Register

> Example request:

```bash
curl -X GET -G "http://localhost/api/product/sup={id}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"6pYi1a15AsfpQCXa","$page":4,"$limit":6}'

```

```javascript
const url = new URL("http://localhost/api/product/sup={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "6pYi1a15AsfpQCXa",
    "$page": 4,
    "$limit": 6
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Product get error."
}
```

### HTTP Request
`GET api/product/sup={id}&amp;page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id sup
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pagesize

<!-- END_1eef80a8b3d8845e7e1c4ed9f690602d -->

<!-- START_ea1c345e57af7e9ce6c0a9db451d7c7f -->
## Get store

> Example request:

```bash
curl -X GET -G "http://localhost/api/store/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":9,"$limit":3}'

```

```javascript
const url = new URL("http://localhost/api/store/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 9,
    "$limit": 3
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Stores get error."
}
```

### HTTP Request
`GET api/store/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_ea1c345e57af7e9ce6c0a9db451d7c7f -->

<!-- START_d8b29554c4b96d2838c618a2ba3cba5a -->
## Get list catagory

> Example request:

```bash
curl -X GET -G "http://localhost/api/catagory/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":8,"$limit":6}'

```

```javascript
const url = new URL("http://localhost/api/catagory/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 8,
    "$limit": 6
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Catagories get error."
}
```

### HTTP Request
`GET api/catagory/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_d8b29554c4b96d2838c618a2ba3cba5a -->

<!-- START_b51525bd66ced5c8e38f778047da0b72 -->
## Get prices

> Example request:

```bash
curl -X GET -G "http://localhost/api/prices/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"bigInt":"sDIVL5jgaMoH9ZQW"}'

```

```javascript
const url = new URL("http://localhost/api/prices/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bigInt": "sDIVL5jgaMoH9ZQW"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/prices/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    bigInt | $id |  optional  | of product

<!-- END_b51525bd66ced5c8e38f778047da0b72 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register

> Example request:

```bash
curl -X POST "http://localhost/api/register" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"lml6iS0CIvsQVWPJ"}'

```

```javascript
const url = new URL("http://localhost/api/register");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "lml6iS0CIvsQVWPJ"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/register`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | infomation of user (ho_ten,email,password,so_dien_thoai,dia_chi,password_confirmation)

<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Login

> Example request:

```bash
curl -X POST "http://localhost/api/login" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"UDG79vIRQtSwykEc"}'

```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "UDG79vIRQtSwykEc"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjhiOWJhZGNhOGUzOTU2Y2UyNDhjZjQ4NWIxMTc1MWRkMDM1ZGE2YjZmNWExNDA1YmFlN2ExMTIzMTdlNDNjODgwMGRkZmZkYzIxNzI4YjVjIn0.eyJhdWQiOiIxIiwianRpIjoiOGI5YmFkY2E4ZTM5NTZjZTI0OGNmNDg1YjExNzUxZGQwMzVkYTZiNmY1YTE0MDViYWU3YTExMjMxN2U0M2M4ODAwZGRmZmRjMjE3MjhiNWMiLCJpYXQiOjE1NTUzMjc1MjIsIm5iZiI6MTU1NTMyNzUyMiwiZXhwIjoxNTg2OTQ5OTIyLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.isVOgUgiUDaOizURiXGVuGXpXS8hmFFTuVWIP5qQ2xqknntoDDGGG-CVrvdT-OkNAdHyyxlEZQ-1WfM194LC3lJTDf2Y6FdHNAykJtLZNbbvGXENX7s0GPVjlqvvKKwOqWk6mTe4hovrBRqBcPVRNtLsCi9huHmEiLHQFBZdf3E3kCLJJLajJ4PSsZqTcFixkSaxyQ0AkjLRfTMd7ANGCh8Zi-kkHGKV_FW_fBZvGESARC6Iaga-pftHZD2LLMzkakxTx9pbb7V58oGrqNrDL3oMt-W18jjxf5QIDwrVc0gcrIF9-YUaKzfTgmX3C6EbfJZnMG8npImkOsnnmwAr_C7F_w5ijSyybXGgb0oCtn29Ci4jcMsuQCOcvp1M_5nF6kXGgVzE06pYYM0rdXdI1NFSo2Y_ymjhHYwq1nRdrbKmy8AE-Bm9hhyxZ8hMIMeA7KOvt7VMJgAsrQThVd_gHEMs5Z1MNpxi5RG35n4ycRfZsoZX9wyU1WOKfAxpwxogbJhQ2lwslupjctuUOWF90M-yaBML-pvbqQP_EH62QiJlpaJWUDop2jdofJSpfdZuOXsKKJrAlbIDusLY776wjdy4L6iMeA3_Bu3nL3PGsaRMjgvsgu4itQeGzV3PlCBh3soPEvRhq_4CFCK2Cs0sm0ChR8LpvrBPU1AtjjbuQ-o",
    "token_type": "Bearer",
    "expires_at": "2020-04-15 11:25:22"
}
```
> Example response (404):

```json
{}
```

### HTTP Request
`POST api/login`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | infomation login email, password

<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Get the authenticated User

> Example request:

```bash
curl -X GET -G "http://localhost/api/user" \
    -H "Authorization: Bearer: {token}"
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Authorization": "Bearer: {token}",
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_3b67b70e3b730585f2f863fb5e2db905 -->
## Get user with role

> Example request:

```bash
curl -X GET -G "http://localhost/api/user&amp;role={id}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"bigInt":"HnjjpfmMdxUsXSDK","int":"rekJYy4RlL4l8G18"}'

```

```javascript
const url = new URL("http://localhost/api/user&amp;role={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bigInt": "HnjjpfmMdxUsXSDK",
    "int": "rekJYy4RlL4l8G18"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET api/user&amp;role={id}&amp;page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    bigInt | $id |  optional  | id of role
    int | $limit |  optional  | pageSize

<!-- END_3b67b70e3b730585f2f863fb5e2db905 -->

<!-- START_00e7e21641f05de650dbe13f242c6f2c -->
## Logout user (Revoke the token)

> Example request:

```bash
curl -X GET -G "http://localhost/api/logout" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"ySyacdFrT76cSo3A"}'

```

```javascript
const url = new URL("http://localhost/api/logout");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "ySyacdFrT76cSo3A"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET api/logout`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | (token delete logout)

<!-- END_00e7e21641f05de650dbe13f242c6f2c -->

<!-- START_2d62ba7cf16a7d6db447375e13e86c34 -->
## Add new product

> Example request:

```bash
curl -X POST "http://localhost/api/product" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"6aXSyzXqstmIckFZ"}'

```

```javascript
const url = new URL("http://localhost/api/product");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "6aXSyzXqstmIckFZ"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Product created successfully."
}
```
> Example response (404):

```json
{
    "message": "Validation Error."
}
```

### HTTP Request
`POST api/product`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of product add(ten_danh_muc,danh_muc_id,nha_cung_cap_id,don_gia,don_vi_ban,don_vi_ton_kho)

<!-- END_2d62ba7cf16a7d6db447375e13e86c34 -->

<!-- START_469fd283a01ebdb6b4556724ea329fd4 -->
## Update old product

> Example request:

```bash
curl -X PUT "http://localhost/api/product/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":10,"$request":"PxE4d87isML2C2DU"}'

```

```javascript
const url = new URL("http://localhost/api/product/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 10,
    "$request": "PxE4d87isML2C2DU"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Product updated sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Product updated error."
}
```

### HTTP Request
`PUT api/product/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | id of product update
    $request | Request |  optional  | (infomation of product want to update)

<!-- END_469fd283a01ebdb6b4556724ea329fd4 -->

<!-- START_180d60b6481f5b1787ffcdb42da65460 -->
## Delete product

> Example request:

```bash
curl -X DELETE "http://localhost/api/product/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":20}'

```

```javascript
const url = new URL("http://localhost/api/product/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 20
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Product deleted sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Product deleted error."
}
```

### HTTP Request
`DELETE api/product/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | 

<!-- END_180d60b6481f5b1787ffcdb42da65460 -->

<!-- START_3f8761ce88b9d8916be2cc7506661dc3 -->
## Add new store

> Example request:

```bash
curl -X POST "http://localhost/api/store" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"06sWG5Rucjt7N6hQ"}'

```

```javascript
const url = new URL("http://localhost/api/store");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "06sWG5Rucjt7N6hQ"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Validation Error."
}
```

### HTTP Request
`POST api/store`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of store add(dia_chi,email,sdt,nguoi_dung_id)

<!-- END_3f8761ce88b9d8916be2cc7506661dc3 -->

<!-- START_7a694007e0beb390e1f58171ac2ba6b7 -->
## Update store

> Example request:

```bash
curl -X PUT "http://localhost/api/store/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"Xa9ROv6qL704Jt2z","$id":"oCrYQgQM7tR4UXid"}'

```

```javascript
const url = new URL("http://localhost/api/store/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "Xa9ROv6qL704Jt2z",
    "$id": "oCrYQgQM7tR4UXid"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Stores updated successfully."
}
```
> Example response (404):

```json
{
    "message": "Stores updated error."
}
```

### HTTP Request
`PUT api/store/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of store update
    $id | bigInt |  optional  | id of store update

<!-- END_7a694007e0beb390e1f58171ac2ba6b7 -->

<!-- START_3d619c1256e6df2715354d7cab8b59a7 -->
## Delete store

> Example request:

```bash
curl -X DELETE "http://localhost/api/store/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"w1XjO51ypVNCNjop"}'

```

```javascript
const url = new URL("http://localhost/api/store/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "w1XjO51ypVNCNjop"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Store deleted sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Store deleted error."
}
```

### HTTP Request
`DELETE api/store/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | store id delete

<!-- END_3d619c1256e6df2715354d7cab8b59a7 -->

<!-- START_a1a71fd5274b39fdf7c271e9df65544f -->
## Get list role

> Example request:

```bash
curl -X GET -G "http://localhost/api/role/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":3,"$limit":15}'

```

```javascript
const url = new URL("http://localhost/api/role/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 3,
    "$limit": 15
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/role/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_a1a71fd5274b39fdf7c271e9df65544f -->

<!-- START_9da1b300a2c60ef9fb7d7bbbb9f7c300 -->
## Add new role

> Example request:

```bash
curl -X POST "http://localhost/api/role" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"KaK2o5GCSJD58BWa"}'

```

```javascript
const url = new URL("http://localhost/api/role");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "KaK2o5GCSJD58BWa"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`POST api/role`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of role add(ten_vai_tro)

<!-- END_9da1b300a2c60ef9fb7d7bbbb9f7c300 -->

<!-- START_0759aaaa487c072fe42f26b76af824e9 -->
## Update role with id

> Example request:

```bash
curl -X PUT "http://localhost/api/role/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"Rr41nusUYdfoko8r","$id":"gQIWNLTkfcLdkuso"}'

```

```javascript
const url = new URL("http://localhost/api/role/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "Rr41nusUYdfoko8r",
    "$id": "gQIWNLTkfcLdkuso"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Roles updated successfully."
}
```

### HTTP Request
`PUT api/role/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | infomation of role update
    $id | bigInt |  optional  | if of role update

<!-- END_0759aaaa487c072fe42f26b76af824e9 -->

<!-- START_6f97fc4beb6e2440e95ca86508c12c42 -->
## Delete role with id

> Example request:

```bash
curl -X DELETE "http://localhost/api/role/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"vmK7NQEZTg4TC2dA"}'

```

```javascript
const url = new URL("http://localhost/api/role/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "vmK7NQEZTg4TC2dA"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Role deleted sucessfully."
}
```

### HTTP Request
`DELETE api/role/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id of role delete

<!-- END_6f97fc4beb6e2440e95ca86508c12c42 -->

<!-- START_0895dd7e229c08c7272dd3c228a94911 -->
## Add new catagory

> Example request:

```bash
curl -X POST "http://localhost/api/catagory" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"80PgMQSZrqhYWCqL"}'

```

```javascript
const url = new URL("http://localhost/api/catagory");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "80PgMQSZrqhYWCqL"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Validation Error."
}
```

### HTTP Request
`POST api/catagory`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of catafory add(ten_danh_muc)

<!-- END_0895dd7e229c08c7272dd3c228a94911 -->

<!-- START_2f6cd4d1c53583d2fed9af4c282f5797 -->
## Update old catagory

> Example request:

```bash
curl -X PUT "http://localhost/api/catagory/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"f2tDQX42uYPacfiL","$id":"T1nsdG1gqvl8ztGS"}'

```

```javascript
const url = new URL("http://localhost/api/catagory/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "f2tDQX42uYPacfiL",
    "$id": "T1nsdG1gqvl8ztGS"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Catagory updated error."
}
```

### HTTP Request
`PUT api/catagory/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | infomation of catagory update
    $id | id |  optional  | of catagory update

<!-- END_2f6cd4d1c53583d2fed9af4c282f5797 -->

<!-- START_4d0a87986285e04881f76f4e59673d32 -->
## Delete catagory with id

> Example request:

```bash
curl -X DELETE "http://localhost/api/catagory/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":6}'

```

```javascript
const url = new URL("http://localhost/api/catagory/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 6
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
{
    "message": "Catagory deleted error."
}
```

### HTTP Request
`DELETE api/catagory/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | integer |  optional  | id of catagory delete

<!-- END_4d0a87986285e04881f76f4e59673d32 -->

<!-- START_2b08ee65dd9d3a652fad34faa3c6631a -->
## Get list user

> Example request:

```bash
curl -X GET -G "http://localhost/api/users/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":7,"$limit":8}'

```

```javascript
const url = new URL("http://localhost/api/users/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 7,
    "$limit": 8
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET api/users/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_2b08ee65dd9d3a652fad34faa3c6631a -->

<!-- START_c08615e2e30d3df3f2c7b6bb6314db46 -->
## Get list order

> Example request:

```bash
curl -X GET -G "http://localhost/api/order/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":9,"$limit":3}'

```

```javascript
const url = new URL("http://localhost/api/order/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 9,
    "$limit": 3
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/order/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_c08615e2e30d3df3f2c7b6bb6314db46 -->

<!-- START_c3643c0463ccf88673e64bd22902ce3b -->
## Get order with user-id

> Example request:

```bash
curl -X GET -G "http://localhost/api/order/user={id}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"RngJ2j6o9Oq6p948","$page":10,"$limit":3}'

```

```javascript
const url = new URL("http://localhost/api/order/user={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "RngJ2j6o9Oq6p948",
    "$page": 10,
    "$limit": 3
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/order/user={id}&amp;page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id-order get
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_c3643c0463ccf88673e64bd22902ce3b -->

<!-- START_4eb1535002e3b09791f17ab51a0bf16e -->
## Get order with date-order

> Example request:

```bash
curl -X GET -G "http://localhost/api/order/date={date}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$date":"SbvvB9pCMSqOUXvX","$page":11,"$limit":14}'

```

```javascript
const url = new URL("http://localhost/api/order/date={date}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$date": "SbvvB9pCMSqOUXvX",
    "$page": 11,
    "$limit": 14
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/order/date={date}&amp;page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $date | date |  optional  | date order get api
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_4eb1535002e3b09791f17ab51a0bf16e -->

<!-- START_41c4109815dd93a1660391383072c3db -->
## Get order with date-order

> Example request:

```bash
curl -X GET -G "http://localhost/api/order/datere={date}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$date":"ZKip8sJPGJ1ZnniN","$page":19,"$limit":5}'

```

```javascript
const url = new URL("http://localhost/api/order/datere={date}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$date": "ZKip8sJPGJ1ZnniN",
    "$page": 19,
    "$limit": 5
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/order/datere={date}&amp;page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $date | date |  optional  | date-recived get api
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_41c4109815dd93a1660391383072c3db -->

<!-- START_04cf024f51de65a274a7dcbb78a2609f -->
## Delete order with id

> Example request:

```bash
curl -X DELETE "http://localhost/api/order/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"tgmrTuVY8iihZ0Fo"}'

```

```javascript
const url = new URL("http://localhost/api/order/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "tgmrTuVY8iihZ0Fo"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Order deleted sucessfully."
}
```

### HTTP Request
`DELETE api/order/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id-order delete

<!-- END_04cf024f51de65a274a7dcbb78a2609f -->

<!-- START_50c0a334d57bffdf48ce568bad023ce0 -->
## Add new test

> Example request:

```bash
curl -X POST "http://localhost/api/test" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"ROr0y1h4BorokEdk"}'

```

```javascript
const url = new URL("http://localhost/api/test");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "ROr0y1h4BorokEdk"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Validation Error."
}
```

### HTTP Request
`POST api/test`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of test add (ten_bai_kiem_tra,so_cau,thoi_gian,nha_cung_cap_id)

<!-- END_50c0a334d57bffdf48ce568bad023ce0 -->

<!-- START_1adf8d8c1f777bda7d99fe57a7c6cd4b -->
## Get detail-order with id

> Example request:

```bash
curl -X GET -G "http://localhost/api/orderdetail/{id}/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"h5WOLBOptX7cBfLN","$page":8,"$limit":18}'

```

```javascript
const url = new URL("http://localhost/api/orderdetail/{id}/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "h5WOLBOptX7cBfLN",
    "$page": 8,
    "$limit": 18
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`GET api/orderdetail/{id}/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id order want to get detail
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_1adf8d8c1f777bda7d99fe57a7c6cd4b -->

<!-- START_fde0bb116b4934564f52d1d10d834500 -->
## Update test

> Example request:

```bash
curl -X PUT "http://localhost/api/test/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"MfvGkcCgdYxBjWld","$id":"6beUIoGWtEhQDSO8"}'

```

```javascript
const url = new URL("http://localhost/api/test/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "MfvGkcCgdYxBjWld",
    "$id": "6beUIoGWtEhQDSO8"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Test updated sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Test updated error."
}
```

### HTTP Request
`PUT api/test/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of test update
    $id | bigInt |  optional  | if of test update

<!-- END_fde0bb116b4934564f52d1d10d834500 -->

<!-- START_b95a37dd65c9f32edff5c87d23531634 -->
## Delete test

> Example request:

```bash
curl -X DELETE "http://localhost/api/test/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"vWMbINbBNzhpbOgP"}'

```

```javascript
const url = new URL("http://localhost/api/test/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "vWMbINbBNzhpbOgP"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Test deleted sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Test deleted error."
}
```

### HTTP Request
`DELETE api/test/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id of test delete

<!-- END_b95a37dd65c9f32edff5c87d23531634 -->

<!-- START_dff64e9ebb88052e88e39b73f85d8b9d -->
## Get test information

> Example request:

```bash
curl -X GET -G "http://localhost/api/testdetail/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"int":"vDAVsANVnbCZh8MJ"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "vDAVsANVnbCZh8MJ"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response:

```json
null
```

### HTTP Request
`GET api/testdetail/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    int | $page |  optional  | page in

<!-- END_dff64e9ebb88052e88e39b73f85d8b9d -->

<!-- START_9fe878b7205450f5b14c759fa57c2bbb -->
## Insert detail-test detail

> Example request:

```bash
curl -X POST "http://localhost/api/testdetail" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"Request":"DSJIAvy9nqZnC4G2"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "Request": "DSJIAvy9nqZnC4G2"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Question created successfully."
}
```
> Example response (404):

```json
{
    "message": "Validation Error."
}
```

### HTTP Request
`POST api/testdetail`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    Request | $request |  optional  | information of detailtest add

<!-- END_9fe878b7205450f5b14c759fa57c2bbb -->

<!-- START_b8f6f134860467eb8bafe0417e11476a -->
## Update detail-test detail

> Example request:

```bash
curl -X PUT "http://localhost/api/testdetail/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"W7LXgq77zbbK8v4I","$id":"pk9AfvoTkSxaTo05"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "W7LXgq77zbbK8v4I",
    "$id": "pk9AfvoTkSxaTo05"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Test-details updated sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Test-details updated error."
}
```

### HTTP Request
`PUT api/testdetail/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of detailtest update
    $id | bigInt |  optional  | of detail update

<!-- END_b8f6f134860467eb8bafe0417e11476a -->

<!-- START_555abb7753057c9ac1f04b86c3a03cb2 -->
## Delete detail test

> Example request:

```bash
curl -X DELETE "http://localhost/api/testdetail/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"hInS7xZEVzTwyKt6"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "hInS7xZEVzTwyKt6"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Question deleted sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Question deleted error."
}
```

### HTTP Request
`DELETE api/testdetail/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | delete

<!-- END_555abb7753057c9ac1f04b86c3a03cb2 -->

<!-- START_69c1db11f3d851882ae241ae048a4dc2 -->
## Get list cart

> Example request:

```bash
curl -X GET -G "http://localhost/api/cart/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":2,"$limit":14}'

```

```javascript
const url = new URL("http://localhost/api/cart/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 2,
    "$limit": 14
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "total": 1,
        "page": 1,
        "pageSize": "1",
        "data": [
            {
                "id": 1,
                "ma_nguoi_dung": 1
            }
        ]
    },
    "message": "Carts retrieved successfully."
}
```
> Example response (404):

```json
{
    "message": "Cart get error."
}
```

### HTTP Request
`GET api/cart/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | size page

<!-- END_69c1db11f3d851882ae241ae048a4dc2 -->

<!-- START_ffc9879f3ac5b6304e7047c50762e044 -->
## Add new cart

> Example request:

```bash
curl -X POST "http://localhost/api/cart" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"tIR1wld5dAmmOYyv"}'

```

```javascript
const url = new URL("http://localhost/api/cart");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "tIR1wld5dAmmOYyv"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "ma_nguoi_dung": "4",
        "id": 4
    },
    "message": "Cart created successfully."
}
```
> Example response (404):

```json
{
    "message": "Validation Error."
}
```

### HTTP Request
`POST api/cart`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | infomation of cart added(ma_nguoi_dung)

<!-- END_ffc9879f3ac5b6304e7047c50762e044 -->

<!-- START_27abe8b89bda228b0433d294937f186c -->
## Update old cart

> Example request:

```bash
curl -X PUT "http://localhost/api/cart/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"hAodQVVZOA6sLSGu","$id":"7Iv6dAuhXs4V97Zd"}'

```

```javascript
const url = new URL("http://localhost/api/cart/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "hAodQVVZOA6sLSGu",
    "$id": "7Iv6dAuhXs4V97Zd"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Cart updated sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Cart updated error."
}
```

### HTTP Request
`PUT api/cart/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | infomation update(ma_nguoi_dung)
    $id | bigInt |  optional  | id-cart to update

<!-- END_27abe8b89bda228b0433d294937f186c -->

<!-- START_31ffac3a110ca4858e085244a686e611 -->
## Delete cart with id

> Example request:

```bash
curl -X DELETE "http://localhost/api/cart/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"NPZp142uaRiEq0QP"}'

```

```javascript
const url = new URL("http://localhost/api/cart/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "NPZp142uaRiEq0QP"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Cart deleted sucessfully."
}
```
> Example response (404):

```json
{
    "message": "Cart deleted error."
}
```

### HTTP Request
`DELETE api/cart/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id cart to delete

<!-- END_31ffac3a110ca4858e085244a686e611 -->

<!-- START_777bb3115e277efe2a5d2cdd808c4e59 -->
## Get detail-cart

> Example request:

```bash
curl -X GET -G "http://localhost/api/cartdetail/{id}/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"ZplXPhccZcaxf5Ov","$page":9,"$limit":10}'

```

```javascript
const url = new URL("http://localhost/api/cartdetail/{id}/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "ZplXPhccZcaxf5Ov",
    "$page": 9,
    "$limit": 10
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": true,
    "data": {
        "total": 3,
        "page": 1,
        "pageSize": "2",
        "data": [
            {
                "id": 1,
                "so_luong": 2,
                "san_pham_id": 1,
                "gio_hang_id": 1
            },
            {
                "id": 2,
                "so_luong": 3,
                "san_pham_id": 2,
                "gio_hang_id": 1
            }
        ]
    },
    "message": "CartDetails retrieved successfully."
}
```
> Example response (404):

```json
{
    "message": "CartCartDetail get error."
}
```

### HTTP Request
`GET api/cartdetail/{id}/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id-cart when want to get detail
    $page | integer |  optional  | page in
    $limit | integer |  optional  | size page

<!-- END_777bb3115e277efe2a5d2cdd808c4e59 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Add new user

> Example request:

```bash
curl -X POST "http://localhost/api/user" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"Request":"ZNPprFVOUlQqgQpr"}'

```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "Request": "ZNPprFVOUlQqgQpr"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/user`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    Request | $request |  optional  | information of user add

<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_538c59bd7094f21614fa40efbc87039d -->
## Update old user

> Example request:

```bash
curl -X PUT "http://localhost/api/user/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"Request":"EVLVfO2oaEQPFvFF","bigInt":"pnrvkfsGcVtEKft6"}'

```

```javascript
const url = new URL("http://localhost/api/user/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "Request": "EVLVfO2oaEQPFvFF",
    "bigInt": "pnrvkfsGcVtEKft6"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/user/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    Request | $request |  optional  | information of user update
    bigInt | $id |  optional  | of user

<!-- END_538c59bd7094f21614fa40efbc87039d -->

<!-- START_a1ef15db35f08591deb485d3c5fb9a31 -->
## Delete user

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"bigInt":"UfW0PHojq9ttPkV6"}'

```

```javascript
const url = new URL("http://localhost/api/user/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bigInt": "UfW0PHojq9ttPkV6"
}

fetch(url, {
    method: "DELETE",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/user/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    bigInt | $id |  optional  | of user update

<!-- END_a1ef15db35f08591deb485d3c5fb9a31 -->

<!-- START_cd95d3e90339c282e0b608349e80a381 -->
## Add new order

> Example request:

```bash
curl -X POST "http://localhost/api/order" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"zg6XOjmMXtY9A0OA"}'

```

```javascript
const url = new URL("http://localhost/api/order");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "zg6XOjmMXtY9A0OA"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{}
```

### HTTP Request
`POST api/order`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information of order add

<!-- END_cd95d3e90339c282e0b608349e80a381 -->

<!-- START_03f526b5b26f02e00b6b46cc43215d72 -->
## Update old order

> Example request:

```bash
curl -X PUT "http://localhost/api/order/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"VPtHGFOBxyW7d2sM","$id":"nJMXzM9eZGyYSPny"}'

```

```javascript
const url = new URL("http://localhost/api/order/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "VPtHGFOBxyW7d2sM",
    "$id": "nJMXzM9eZGyYSPny"
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "Orders updated successfully."
}
```

### HTTP Request
`PUT api/order/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $request | Request |  optional  | information update
    $id | bigInt |  optional  | id of order update

<!-- END_03f526b5b26f02e00b6b46cc43215d72 -->

<!-- START_2d90d557caf795f43a653ed74ac2daa5 -->
## Get total-money

> Example request:

```bash
curl -X GET -G "http://localhost/api/total/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"m4yxtepyUO1c4d5p"}'

```

```javascript
const url = new URL("http://localhost/api/total/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "m4yxtepyUO1c4d5p"
}

fetch(url, {
    method: "GET",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "total": "....."
}
```

### HTTP Request
`GET api/total/{id}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | cart want to get total

<!-- END_2d90d557caf795f43a653ed74ac2daa5 -->


