# Contoh Codeigniter REST API
Contoh source code Dalam Belajar basic backend developer Menggunakan REST API (login, CRUD).

koneksi database dengan database contoh ciAPI.sql yang tersedia

Anda Dapat mengunakan [POSTMAN](https://www.getpostman.com/) atau apapun front client.

# Test API
Anda Dapat tes the API dg memasukan header `Content-Type`,`Client-Service` & `Auth-Key` dengan value `application/json`,`frontend-client` & `simplerestapi` in every request

List API :

lakukan login dengan akses ini.
`[POST]` `/auth/login` body json `{ "username" : "admin", "password" : "Admin123$"}`


untuk selanjutnya saat respon sukses tambahkan pada header `User-ID`&`Authorization` dengan value `1` & `d591666` contoh respon `{"status":200,"message":"Successfully login.","id":"1","token":"d591666"}`


`[GET]` `/book`

`[POST]` `/book/create` body json `{ "title" : "x", "author" : "xx"}`

`[PUT]` `/book/update/:id` body json `{ "title" : "y", "author" : "yy"}`

`[GET]` `/book/detail/:id`

`[DELETE]` `/book/delete/:id`

Akhiri Akses

`[POST]` `/auth/logout`
