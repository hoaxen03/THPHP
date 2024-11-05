create database qlbh ;

CREATE TABLE User (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE SanPham (
    product_id INT PRIMARY KEY AUTO_INCREMENT,
    product_name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255)
    category_name VARCHAR(50) NOT NULL;
);

CREATE TABLE DonHang (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    total_amount DECIMAL(10, 2),
    customer_name VARCHAR(100),
    customer_contact VARCHAR(100),
    order_date DATE NOT NULL,
    FOREIGN KEY (product_id) REFERENCES SanPham(product_id)
);

INSERT INTO User (username, password, email) VALUES
('user1', 'password1', 'user1@example.com'),
('user2', 'password2', 'user2@example.com'),
('user3', 'password3', 'user3@example.com'),
('user4', 'password4', 'user4@example.com'),
('user5', 'password5', 'user5@example.com'),
('user6', 'password6', 'user6@example.com'),
('user7', 'password7', 'user7@example.com'),
('user8', 'password8', 'user8@example.com'),
('user9', 'password9', 'user9@example.com'),
('user10', 'password10', 'user10@example.com');

INSERT INTO DonHang (product_id, quantity, total_amount, customer_name, customer_contact, order_date) VALUES
(1, 2, 200.00, 'Nguyễn Văn A', '0123456789', '2024-11-01'),
(2, 1, 150.50, 'Trần Thị B', '0987654321', '2024-11-02'),
(3, 3, 600.00, 'Lê Văn C', '0245789134', '2024-11-03'),
(4, 2, 501.50, 'Phạm Thị D', '0354912765', '2024-11-04'),
(5, 1, 300.20, 'Nguyễn Văn E', '0456781234', '2024-11-05'),
(6, 5, 627.50, 'Trần Văn F', '0567891342', '2024-11-01'),
(7, 4, 723.96, 'Lê Thị G', '0678902451', '2024-11-02'),
(8, 1, 220.00, 'Nguyễn Văn H', '0789013560', '2024-11-03'),
(9, 10, 999.90, 'Trần Văn I', '0890124679', '2024-11-04'),
(10, 3, 226.50, 'Lê Thị J', '0901235788', '2024-11-05');


INSERT INTO SanPham (product_name, price, image_url, category_name) VALUES 
('Điện thoại Samsung Galaxy S23', 25000000, 'samsung_s23.jpg','Điện tử'),
('iPhone 14 Pro Max', 30000000, 'iphone_14_pro_max.jpg','Điện tử'),
('Laptop Dell XPS 13', 35000000, 'dell_xps_13.jpg','Điện tử'),
('Máy tính bảng iPad Air', 15000000, 'ipad_air.jpg','Điện tử'),
('Tai nghe AirPods Pro', 5000000, 'airpods_pro.jpg','Điện tử'),
('Smartwatch Apple Watch Series 8', 10000000, 'apple_watch_8.jpg','Điện tử'),
('Camera Sony A7 III', 45000000, 'sony_a7_iii.jpg','Điện tử'),
('Loa Bluetooth JBL Charge 5', 3000000, 'jbl_charge_5.jpg','Điện tử'),
('Tivi Samsung 55 inch', 18000000, 'samsung_tv_55.jpg','Điện tử'),
('Điều hòa Daikin Inverter', 12000000, 'daikin_inverter.jpg','Điện tử'),
('Máy lọc không khí Xiaomi', 3000000, 'xiaomi_air_purifier.jpg','Điện tử'),
('Máy giặt LG Inverter', 9000000, 'lg_washing_machine.jpg','Điện tử'),
('Tủ lạnh Samsung 4 cửa', 25000000, 'samsung_fridge_4door.jpg','Điện tử'),
('Máy ảnh Canon EOS M50', 15000000, 'canon_eos_m50.jpg','Đồ gia dụng'),
('Máy hút bụi Dyson V11', 12000000, 'dyson_v11.jpg','Đồ gia dụng'),
('Quạt không cánh Dyson', 9000000, 'dyson_fan.jpg','Phụ kiện'),
('Điện thoại Oppo Find X5', 20000000, 'oppo_find_x5.jpg','Phụ kiện'),
('Laptop MacBook Air M2', 28000000, 'macbook_air_m2.jpg','Thể thao'),
('Tablet Samsung Galaxy Tab S8', 18000000, 'galaxy_tab_s8.jpg','Thể thao'),
('Máy in HP LaserJet Pro', 5000000, 'hp_laserjet_pro.jpg','Thời trang');
