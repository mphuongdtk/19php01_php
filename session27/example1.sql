--cau ví dụ 
--Cau lệnh lấy tất cả sản phẩm thuộc những danh muc, mà danh mục đó có tên chứa chữ 'a'
SELECT * FROM products INNER JOIN categories ON 
products.categoryID = categories.categoryID WHERE 
categories.categoryNameLIKE '%a%'

--1 : Lấy ra danh sách sản phẩm thuộc danh mục "Guitars" có gía lớn hơn 500
SELECT categoryID, productName, listPrice FROM products
WHERE categoryID = 1 AND listPrice > 500
-- giải
SELECT * FROM products INNER JOIN categories 
ON products.categoryID = categories.categoryID
WHERE categories.categoryName = 'Guitars' AND products.listPrice > 500


--2: Lấy ra danh sách sản phẩm được thêm vào tháng 7/2014, có giá lớn hơn 300, và sắp xếp giảm dần theo giá
SELECT categoryID, productName,listPrice, dateAdded FROM products
WHERE  listPrice > 300 AND dateAdded LIKE  '2014-07-%' 
ORDER BY listPrice DESC ;
--3. Lấy ra danh sách sản phẩm mà tên có chứa chữ "o", thuộc danh mục "Basses", sắp xếp giảm dần theo tên
SELECT categoryID,  productName FROM products
WHERE categoryID = 2 AND productName LIKE '%o%'
AND categoryID = 'Basses'
ORDER BY productName DESC;
--giải bài 3 
SELECT * FROM products INNER JOIN categories 
ON products.categoryID = categories.categoryID
WHERE products.productName LIKE '%o%'
AND categories.categoryName = 'Basses'
ORDER BY products.productName DESC;


--4. Lấy ra danh sách sản phẩm mà khách hàng sử dụng gmail để mua
-- giải
SELECT * FROM products 
INNER JOIN orderItems ON orderItems.productID = products.productID
INNER JOIN orders ON orderItems.orderID = orders.orderID
INNER JOIN customers ON customers.customerID = orders.customerID
WHERE customers.emailAddress LIKE '%@gmail.com%'







--5. Lấy ra danh sách sản phẩm có giá lơn hơn 300, đăng năm 2014, giới hạn lấy 4 sản phẩm và sắp xếp theo giảm giá giảm dần
SELECT * FROM products
WHERE listPrice > 300 AND dateAdded LIKE '2014-%-%'
ORDER BY listPrice DESC
LIMIT 4;
--6. Lấy ra tên thành phố mà khách hàng đã mua sản phẩm "Yamaha FG700S
--giải
SELECT DISTINCT city, productName FROM `products` 
INNER JOIN orderItems ON orderItems.productID = products.productID 
INNER JOIN orders ON orderItems.orderID = orders.orderID 
INNER JOIN customers ON customers.customerID = orders.customerID 
INNER JOIN addresses ON addresses.customerID = customers.customerID 
WHERE products.productName = 'Yamaha FG700S'