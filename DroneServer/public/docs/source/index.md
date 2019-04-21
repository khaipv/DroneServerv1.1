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
    -d '{"$page":12,"$limit":17}'

```

```javascript
const url = new URL("http://localhost/api/product/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 12,
    "$limit": 17
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
    -d '{"$id":"F5dHLW8M638j06s0","$page":8,"$limit":6}'

```

```javascript
const url = new URL("http://localhost/api/product/cata={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "F5dHLW8M638j06s0",
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

<!-- START_2e259483661687a16501e47e8f0e714c -->
## Get product hiden some infomation()

> Example request:

```bash
curl -X GET -G "http://localhost/api/productname/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":4,"$limit":7}'

```

```javascript
const url = new URL("http://localhost/api/productname/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 4,
    "$limit": 7
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
`GET api/productname/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_2e259483661687a16501e47e8f0e714c -->

<!-- START_28c6616adba1990e1a1fdf2e8ec7b097 -->
## Get list id product

> Example request:

```bash
curl -X GET -G "http://localhost/api/productid/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":7,"$limit":10}'

```

```javascript
const url = new URL("http://localhost/api/productid/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 7,
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
{}
```
> Example response (404):

```json
{
    "message": "Id products get error."
}
```

### HTTP Request
`GET api/productid/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_28c6616adba1990e1a1fdf2e8ec7b097 -->

<!-- START_f655c2012a9361a71ff9406556591872 -->
## Get list name product is sorted by abc

> Example request:

```bash
curl -X GET -G "http://localhost/api/productnamesort/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":16,"$limit":12}'

```

```javascript
const url = new URL("http://localhost/api/productnamesort/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 16,
    "$limit": 12
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
    "message": "Name-products get error."
}
```

### HTTP Request
`GET api/productnamesort/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_f655c2012a9361a71ff9406556591872 -->

<!-- START_79d4bc40515d64b85d946b6f5649a2b2 -->
## Get list prices product is sorted increased value

> Example request:

```bash
curl -X GET -G "http://localhost/api/productpricessort/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":8,"$limit":8}'

```

```javascript
const url = new URL("http://localhost/api/productpricessort/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 8,
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

> Example response (200):

```json
{}
```
> Example response (404):

```json
{
    "message": "Prices-products get error."
}
```

### HTTP Request
`GET api/productpricessort/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_79d4bc40515d64b85d946b6f5649a2b2 -->

<!-- START_a1ad81e2cd64e316723e10cd5fc903d1 -->
## Get list prices product is sorted increased value

> Example request:

```bash
curl -X GET -G "http://localhost/api/productpricessortde/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":19,"$limit":14}'

```

```javascript
const url = new URL("http://localhost/api/productpricessortde/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 19,
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
> Example response (404):

```json
{
    "message": "Prices-products get error."
}
```

### HTTP Request
`GET api/productpricessortde/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_a1ad81e2cd64e316723e10cd5fc903d1 -->

<!-- START_1eef80a8b3d8845e7e1c4ed9f690602d -->
## Register

> Example request:

```bash
curl -X GET -G "http://localhost/api/product/sup={id}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"F2RnxRXHCvNUXwZi","$page":15,"$limit":12}'

```

```javascript
const url = new URL("http://localhost/api/product/sup={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "F2RnxRXHCvNUXwZi",
    "$page": 15,
    "$limit": 12
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
    -d '{"$page":11,"$limit":2}'

```

```javascript
const url = new URL("http://localhost/api/store/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 11,
    "$limit": 2
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

<!-- START_d9d4402a5cfa24405d231e4a39f3d380 -->
## Get list catagory hidden id

> Example request:

```bash
curl -X GET -G "http://localhost/api/catagoryid/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":9,"$limit":19}'

```

```javascript
const url = new URL("http://localhost/api/catagoryid/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 9,
    "$limit": 19
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
`GET api/catagoryid/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_d9d4402a5cfa24405d231e4a39f3d380 -->

<!-- START_b51525bd66ced5c8e38f778047da0b72 -->
## Get prices

> Example request:

```bash
curl -X GET -G "http://localhost/api/prices/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"bigInt":"XGmIiazMNomClU47"}'

```

```javascript
const url = new URL("http://localhost/api/prices/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bigInt": "XGmIiazMNomClU47"
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
    -d '{"$request":"fpCxLfYyaAvjQHrK"}'

```

```javascript
const url = new URL("http://localhost/api/register");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "fpCxLfYyaAvjQHrK"
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
    "message": "Successfully created user!",
    "token_type": "Bearer",
    "expires_at": "2020-04-15 11:25:22"
}
```
> Example response (404):

```json
{
    "message": "Validation Error"
}
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
    -d '{"$request":"dFuWOLA55cFfjBvF"}'

```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "dFuWOLA55cFfjBvF"
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
    -d '{"bigInt":"C66pT5f32Z5Es3A5","int":"537Mfwn1TOD21yUK"}'

```

```javascript
const url = new URL("http://localhost/api/user&amp;role={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "bigInt": "C66pT5f32Z5Es3A5",
    "int": "537Mfwn1TOD21yUK"
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
    "message": "Users get error."
}
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
    -d '{"$request":"Wm0UFunEmqWKiuba"}'

```

```javascript
const url = new URL("http://localhost/api/logout");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "Wm0UFunEmqWKiuba"
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
    -d '{"$request":"O1O3hkKXag4LgZRw"}'

```

```javascript
const url = new URL("http://localhost/api/product");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "O1O3hkKXag4LgZRw"
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
    -d '{"$id":13,"$request":"YCDaUN688cItbOAB"}'

```

```javascript
const url = new URL("http://localhost/api/product/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 13,
    "$request": "YCDaUN688cItbOAB"
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
    -d '{"$id":3}'

```

```javascript
const url = new URL("http://localhost/api/product/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 3
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
    -d '{"$request":"HgDYdtQhCi1Jbyft"}'

```

```javascript
const url = new URL("http://localhost/api/store");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "HgDYdtQhCi1Jbyft"
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
    -d '{"$request":"pnrbmCF9BB6t8fFP","$id":"6WhLkchk8OdYMmXN"}'

```

```javascript
const url = new URL("http://localhost/api/store/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "pnrbmCF9BB6t8fFP",
    "$id": "6WhLkchk8OdYMmXN"
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
    -d '{"$id":"8CEnqBbKBrM1G1u8"}'

```

```javascript
const url = new URL("http://localhost/api/store/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "8CEnqBbKBrM1G1u8"
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
    -d '{"$page":3,"$limit":14}'

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
    -d '{"$request":"hUUgmm3otBLfFfMf"}'

```

```javascript
const url = new URL("http://localhost/api/role");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "hUUgmm3otBLfFfMf"
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
    -d '{"$request":"vWI7mLbawodahOj4","$id":"5MoU4M8MiR5LzdVR"}'

```

```javascript
const url = new URL("http://localhost/api/role/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "vWI7mLbawodahOj4",
    "$id": "5MoU4M8MiR5LzdVR"
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
    -d '{"$id":"EU6LfZe5S6iLhaDs"}'

```

```javascript
const url = new URL("http://localhost/api/role/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "EU6LfZe5S6iLhaDs"
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
    -d '{"$request":"uCXuo9MRzBcZMLtb"}'

```

```javascript
const url = new URL("http://localhost/api/catagory");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "uCXuo9MRzBcZMLtb"
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
    -d '{"$request":"mzV2UHcHbeEMntWL","$id":"7HV77HOhdB5ik8pK"}'

```

```javascript
const url = new URL("http://localhost/api/catagory/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "mzV2UHcHbeEMntWL",
    "$id": "7HV77HOhdB5ik8pK"
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
    -d '{"$id":7}'

```

```javascript
const url = new URL("http://localhost/api/catagory/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": 7
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
    -d '{"$page":18,"$limit":13}'

```

```javascript
const url = new URL("http://localhost/api/users/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 18,
    "$limit": 13
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
    "message": "Users get error."
}
```

### HTTP Request
`GET api/users/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_2b08ee65dd9d3a652fad34faa3c6631a -->

<!-- START_d8b29554c4b96d2838c618a2ba3cba5a -->
## Get list catagory

> Example request:

```bash
curl -X GET -G "http://localhost/api/catagory/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":9,"$limit":13}'

```

```javascript
const url = new URL("http://localhost/api/catagory/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 9,
    "$limit": 13
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

<!-- START_c3643c0463ccf88673e64bd22902ce3b -->
## Get order with user-id

> Example request:

```bash
curl -X GET -G "http://localhost/api/order/user={id}&amp;page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"UKESwaeibnu6QV9F","$page":9,"$limit":15}'

```

```javascript
const url = new URL("http://localhost/api/order/user={id}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "UKESwaeibnu6QV9F",
    "$page": 9,
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
    -d '{"$date":"XX9xnylovWA1l2SA","$page":2,"$limit":9}'

```

```javascript
const url = new URL("http://localhost/api/order/date={date}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$date": "XX9xnylovWA1l2SA",
    "$page": 2,
    "$limit": 9
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
    -d '{"$date":"PahyrNtXMRGEDx0V","$page":20,"$limit":18}'

```

```javascript
const url = new URL("http://localhost/api/order/datere={date}&amp;page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$date": "PahyrNtXMRGEDx0V",
    "$page": 20,
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
`GET api/order/datere={date}&amp;page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $date | date |  optional  | date-recived get api
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_41c4109815dd93a1660391383072c3db -->

<!-- START_1e736cdddf517ffa018edd85a686e60a -->
## Get list user hidden id

> Example request:

```bash
curl -X GET -G "http://localhost/api/userid" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":19,"$limit":5}'

```

```javascript
const url = new URL("http://localhost/api/userid");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
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
> Example response (404):

```json
{
    "message": "Users get error."
}
```

### HTTP Request
`GET api/userid`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_1e736cdddf517ffa018edd85a686e60a -->

<!-- START_6f092e89c928c3e45502f93b6d672ff4 -->
## Get list user hidden id,password

> Example request:

```bash
curl -X GET -G "http://localhost/api/user1" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":7,"$limit":2}'

```

```javascript
const url = new URL("http://localhost/api/user1");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 7,
    "$limit": 2
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
    "message": "Users get error."
}
```

### HTTP Request
`GET api/user1`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_6f092e89c928c3e45502f93b6d672ff4 -->

<!-- START_7afd1b706b17423b891c7b7a0d3a4284 -->
## Get list user hidden id,password,email

> Example request:

```bash
curl -X GET -G "http://localhost/api/user2" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":3,"$limit":1}'

```

```javascript
const url = new URL("http://localhost/api/user2");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 3,
    "$limit": 1
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
    "message": "Users get error."
}
```

### HTTP Request
`GET api/user2`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_7afd1b706b17423b891c7b7a0d3a4284 -->

<!-- START_caeaa396b071c0325164ba8853f58f4c -->
## Get list user hidden id,password,email,role

> Example request:

```bash
curl -X GET -G "http://localhost/api/user3" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":2,"$limit":13}'

```

```javascript
const url = new URL("http://localhost/api/user3");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 2,
    "$limit": 13
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
    "message": "Users get error."
}
```

### HTTP Request
`GET api/user3`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_caeaa396b071c0325164ba8853f58f4c -->

<!-- START_cd80d041b46a131221ccc483ddb67130 -->
## Get list user hidden id,password,email,role

> Example request:

```bash
curl -X GET -G "http://localhost/api/user4" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":3,"$limit":1}'

```

```javascript
const url = new URL("http://localhost/api/user4");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 3,
    "$limit": 1
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
    "message": "Users get error."
}
```

### HTTP Request
`GET api/user4`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_cd80d041b46a131221ccc483ddb67130 -->

<!-- START_04cf024f51de65a274a7dcbb78a2609f -->
## Delete order with id

> Example request:

```bash
curl -X DELETE "http://localhost/api/order/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"308M8YHLrIbMFuiu"}'

```

```javascript
const url = new URL("http://localhost/api/order/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "308M8YHLrIbMFuiu"
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
    -d '{"$request":"LIj7jAcWy8cMUrYa"}'

```

```javascript
const url = new URL("http://localhost/api/test");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "LIj7jAcWy8cMUrYa"
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

<!-- START_6adce66c1595a91ffcb4d87e70169df7 -->
## Get list role witout id

> Example request:

```bash
curl -X GET -G "http://localhost/api/roleid/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":19,"$limit":6}'

```

```javascript
const url = new URL("http://localhost/api/roleid/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 19,
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

### HTTP Request
`GET api/roleid/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_6adce66c1595a91ffcb4d87e70169df7 -->

<!-- START_1adf8d8c1f777bda7d99fe57a7c6cd4b -->
## Get detail-order with id

> Example request:

```bash
curl -X GET -G "http://localhost/api/orderdetail/{id}/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"9Z2MwxXtNudQj5o5","$page":13,"$limit":20}'

```

```javascript
const url = new URL("http://localhost/api/orderdetail/{id}/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "9Z2MwxXtNudQj5o5",
    "$page": 13,
    "$limit": 20
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
    -d '{"$request":"yFJzh9EJySgNdIEw","$id":"kfM8KkgKUKfFdQTW"}'

```

```javascript
const url = new URL("http://localhost/api/test/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "yFJzh9EJySgNdIEw",
    "$id": "kfM8KkgKUKfFdQTW"
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
    -d '{"$id":"SJdpI6JNDT0Igrd8"}'

```

```javascript
const url = new URL("http://localhost/api/test/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "SJdpI6JNDT0Igrd8"
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
    -d '{"int":"GqHV1nVHlwZr7ihl"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "int": "GqHV1nVHlwZr7ihl"
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
    -d '{"$request":"j4PFPLaAqvHFojPZ"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "j4PFPLaAqvHFojPZ"
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
    $request | Request |  optional  | information of detailtest add

<!-- END_9fe878b7205450f5b14c759fa57c2bbb -->

<!-- START_b8f6f134860467eb8bafe0417e11476a -->
## Update detail-test detail

> Example request:

```bash
curl -X PUT "http://localhost/api/testdetail/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"KjQuamb6NYLYmEL6","$id":"a8OInc1xzIMJTKMO"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "KjQuamb6NYLYmEL6",
    "$id": "a8OInc1xzIMJTKMO"
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
    -d '{"$id":"2xCtmgREiCsD23TN"}'

```

```javascript
const url = new URL("http://localhost/api/testdetail/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "2xCtmgREiCsD23TN"
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

<!-- START_caabaf512c7eed9638a49733d34cfde6 -->
## Get list order hidden id

> Example request:

```bash
curl -X GET -G "http://localhost/api/orderwithoutid/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":13,"$limit":10}'

```

```javascript
const url = new URL("http://localhost/api/orderwithoutid/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 13,
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
{}
```

### HTTP Request
`GET api/orderwithoutid/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_caabaf512c7eed9638a49733d34cfde6 -->

<!-- START_41271a6ee2a362fa8eb134475878ff1b -->
## Get list order sortby date recieved

> Example request:

```bash
curl -X GET -G "http://localhost/api/ordersortdatere/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":11,"$limit":14}'

```

```javascript
const url = new URL("http://localhost/api/ordersortdatere/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
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
`GET api/ordersortdatere/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_41271a6ee2a362fa8eb134475878ff1b -->

<!-- START_921edb333f87bdc1c8d2bb0d00235c46 -->
## Get list order sortby date ordered

> Example request:

```bash
curl -X GET -G "http://localhost/api/ordersortdateor/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":13,"$limit":20}'

```

```javascript
const url = new URL("http://localhost/api/ordersortdateor/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 13,
    "$limit": 20
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
`GET api/ordersortdateor/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_921edb333f87bdc1c8d2bb0d00235c46 -->

<!-- START_00c1a4de6784b00a1adde0ae5e05057f -->
## Get list order sortby date recieved

> Example request:

```bash
curl -X GET -G "http://localhost/api/ordersortdatere1/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":6,"$limit":2}'

```

```javascript
const url = new URL("http://localhost/api/ordersortdatere1/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 6,
    "$limit": 2
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
`GET api/ordersortdatere1/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_00c1a4de6784b00a1adde0ae5e05057f -->

<!-- START_50d06a034ad7fe00a6abf3685696ee8d -->
## Get list order sortby date ordered

> Example request:

```bash
curl -X GET -G "http://localhost/api/ordersortdateor1/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":18,"$limit":3}'

```

```javascript
const url = new URL("http://localhost/api/ordersortdateor1/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 18,
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
`GET api/ordersortdateor1/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_50d06a034ad7fe00a6abf3685696ee8d -->

<!-- START_c08615e2e30d3df3f2c7b6bb6314db46 -->
## Get list order

> Example request:

```bash
curl -X GET -G "http://localhost/api/order/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":18,"$limit":5}'

```

```javascript
const url = new URL("http://localhost/api/order/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 18,
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
`GET api/order/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_c08615e2e30d3df3f2c7b6bb6314db46 -->

<!-- START_6b0d564c1aacd0d5850b844dee909c0d -->
## Get store

> Example request:

```bash
curl -X GET -G "http://localhost/api/storef/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":6,"$limit":14}'

```

```javascript
const url = new URL("http://localhost/api/storef/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 6,
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
> Example response (404):

```json
{
    "message": "Stores get error."
}
```

### HTTP Request
`GET api/storef/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_6b0d564c1aacd0d5850b844dee909c0d -->

<!-- START_8dee443be023ee107b27a476ac31450a -->
## Get list cart

> Example request:

```bash
curl -X GET -G "http://localhost/api/cartf/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":16,"$limit":5}'

```

```javascript
const url = new URL("http://localhost/api/cartf/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 16,
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
`GET api/cartf/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | size page

<!-- END_8dee443be023ee107b27a476ac31450a -->

<!-- START_69c1db11f3d851882ae241ae048a4dc2 -->
## Get list cart without id

> Example request:

```bash
curl -X GET -G "http://localhost/api/cart/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":6,"$limit":18}'

```

```javascript
const url = new URL("http://localhost/api/cart/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 6,
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
{
    "success": true,
    "data": {
        "total": 1,
        "page": 1,
        "pageSize": "1",
        "data": [
            {
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
    -d '{"$request":"SyATlu9b4dkhrkCW"}'

```

```javascript
const url = new URL("http://localhost/api/cart");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "SyATlu9b4dkhrkCW"
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
    -d '{"$request":"MbS0Cj0GHaXU8z4x","$id":"EtC6aH6BNZlKnw2x"}'

```

```javascript
const url = new URL("http://localhost/api/cart/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "MbS0Cj0GHaXU8z4x",
    "$id": "EtC6aH6BNZlKnw2x"
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
    -d '{"$id":"slJ0eByDcMcnqRfg"}'

```

```javascript
const url = new URL("http://localhost/api/cart/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "slJ0eByDcMcnqRfg"
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
    -d '{"$id":"LI8b5oLGF8rhWl8L","$page":14,"$limit":19}'

```

```javascript
const url = new URL("http://localhost/api/cartdetail/{id}/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "LI8b5oLGF8rhWl8L",
    "$page": 14,
    "$limit": 19
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

<!-- START_3efb0f1dd46e9300ef5c1ab0a773b4e9 -->
## Get detail-cart wihtout id

> Example request:

```bash
curl -X GET -G "http://localhost/api/cartdetailid/{id}/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"5LlFR9BQdi6y6sEt","$page":14,"$limit":10}'

```

```javascript
const url = new URL("http://localhost/api/cartdetailid/{id}/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "5LlFR9BQdi6y6sEt",
    "$page": 14,
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
                "so_luong": 2,
                "san_pham_id": 1,
                "gio_hang_id": 1
            },
            {
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
`GET api/cartdetailid/{id}/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id-cart when want to get detail
    $page | integer |  optional  | page in
    $limit | integer |  optional  | size page

<!-- END_3efb0f1dd46e9300ef5c1ab0a773b4e9 -->

<!-- START_150b2f49c077903db352de98f25dbd15 -->
## Get detail-cart wihtout id (gio_hang_id)

> Example request:

```bash
curl -X GET -G "http://localhost/api/cartdetailid1/{id}/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"cEjOzLW9djJCOdzB","$page":4,"$limit":5}'

```

```javascript
const url = new URL("http://localhost/api/cartdetailid1/{id}/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "cEjOzLW9djJCOdzB",
    "$page": 4,
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
{
    "success": true,
    "data": {
        "total": 3,
        "page": 1,
        "pageSize": "2",
        "data": [
            {
                "so_luong": 2,
                "san_pham_id": 1
            },
            {
                "so_luong": 3,
                "san_pham_id": 2
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
`GET api/cartdetailid1/{id}/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $id | bigInt |  optional  | id-cart when want to get detail
    $page | integer |  optional  | page in
    $limit | integer |  optional  | size page

<!-- END_150b2f49c077903db352de98f25dbd15 -->

<!-- START_6f59981c90a3ac828f15c434a877fa00 -->
## Get product with sold

> Example request:

```bash
curl -X GET -G "http://localhost/api/productban/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":10,"$limit":5}'

```

```javascript
const url = new URL("http://localhost/api/productban/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$page": 10,
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
> Example response (404):

```json
{
    "message": "Product get error."
}
```

### HTTP Request
`GET api/productban/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_6f59981c90a3ac828f15c434a877fa00 -->

<!-- START_0085ce318e55d7ccc0d1fdffed0ad2eb -->
## Get product with stored

> Example request:

```bash
curl -X GET -G "http://localhost/api/productton/page={page}&amp;limit={size}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$page":4,"$limit":6}'

```

```javascript
const url = new URL("http://localhost/api/productton/page={page}&amp;limit={size}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
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
`GET api/productton/page={page}&amp;limit={size}`

#### Body Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    $page | integer |  optional  | page in
    $limit | integer |  optional  | pageSize

<!-- END_0085ce318e55d7ccc0d1fdffed0ad2eb -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Add new user

> Example request:

```bash
curl -X POST "http://localhost/api/user" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"VWSJALkdp0qmMIDI"}'

```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "VWSJALkdp0qmMIDI"
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
    $request | Request |  optional  | information of user add

<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_538c59bd7094f21614fa40efbc87039d -->
## Update old user

> Example request:

```bash
curl -X PUT "http://localhost/api/user/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"TYLqI71KQg1SgJFR","bigInt":"MZPsxVRLJq7gKmuY"}'

```

```javascript
const url = new URL("http://localhost/api/user/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "TYLqI71KQg1SgJFR",
    "bigInt": "MZPsxVRLJq7gKmuY"
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
    $request | Request |  optional  | information of user update
    bigInt | $id |  optional  | of user

<!-- END_538c59bd7094f21614fa40efbc87039d -->

<!-- START_a1ef15db35f08591deb485d3c5fb9a31 -->
## Delete user

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/{id}" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$id":"4WnT1ixoJsEWzAtp"}'

```

```javascript
const url = new URL("http://localhost/api/user/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "4WnT1ixoJsEWzAtp"
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
    $id | bigInt |  optional  | of user update

<!-- END_a1ef15db35f08591deb485d3c5fb9a31 -->

<!-- START_cd95d3e90339c282e0b608349e80a381 -->
## Add new order

> Example request:

```bash
curl -X POST "http://localhost/api/order" \
    -H "Authorization: Bearer: {token}" \
    -H "Content-Type: application/json" \
    -d '{"$request":"GTuBaVGEcvaIgfGQ"}'

```

```javascript
const url = new URL("http://localhost/api/order");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "GTuBaVGEcvaIgfGQ"
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
    -d '{"$request":"5BdiC4nIL66mJfTd","$id":"FrLcFx6FZ3pgpNMB"}'

```

```javascript
const url = new URL("http://localhost/api/order/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$request": "5BdiC4nIL66mJfTd",
    "$id": "FrLcFx6FZ3pgpNMB"
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
    -d '{"$id":"MyIh2A7RrX0UuUl3"}'

```

```javascript
const url = new URL("http://localhost/api/total/{id}");

let headers = {
    "Authorization": "Bearer: {token}",
    "Content-Type": "application/json",
    "Accept": "application/json",
}

let body = {
    "$id": "MyIh2A7RrX0UuUl3"
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


