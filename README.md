PHẦN I: LÝ THUYẾT
1.1.	Kiến thức HTML (Hypertext Markup Language)
1.1.1.	Giới thiệu về HTML
HTML (Hypertext Markup Language) là ngôn ngữ đánh dấu dùng để xây dựng cấu trúc và nội dung của trang web. Ra đời vào năm 1991 bởi Tim Berners-Lee, HTML đã trở thành chuẩn ngôn ngữ nền tảng cho mọi trang web hiện đại. HTML giúp các trình duyệt (như Chrome, Firefox, Safari) hiểu được cách tổ chức và hiển thị nội dung, từ đó mang lại trải nghiệm dễ hiểu và trực quan cho người dùng.
HTML là một ngôn ngữ đánh dấu chứ không phải ngôn ngữ lập trình, nghĩa là nó sử dụng các thẻ để định dạng nội dung. Mỗi thẻ có tác dụng đặc biệt, giúp phân biệt các phần tử như tiêu đề, đoạn văn, hình ảnh, và liên kết.
1.1.2.	Cấu trúc cơ bản của một tài liệu HTML
Một tài liệu HTML điển hình bao gồm bốn phần chính:
•	Doctype: Khai báo loại tài liệu bằng <!DOCTYPE html>. Điều này giúp trình duyệt hiểu rằng đây là tài liệu HTML5.
•	Thẻ <html>: Thẻ này bao bọc toàn bộ nội dung HTML của trang.
•	Phần <head>: Chứa các thông tin không trực tiếp hiển thị trên trang, nhưng cần thiết cho trình duyệt và công cụ tìm kiếm, như tiêu đề, mã CSS, liên kết đến JavaScript, favicon, v.v.
•	Phần <body>: Chứa nội dung thực tế hiển thị trên trang web, bao gồm văn bản, hình ảnh, liên kết và các thành phần tương tác.
1.1.3.	Các thẻ HTML cơ bản
HTML có hàng trăm thẻ khác nhau, mỗi thẻ có tác dụng riêng biệt. Một số thẻ HTML cơ bản và thường dùng gồm:
1.	Thẻ tiêu đề (<h1> đến <h6>): Được dùng để tạo các tiêu đề từ lớn đến nhỏ, với <h1> là lớn nhất, thường dùng cho tiêu đề chính của trang.
o	Ví dụ: <h1>Tiêu đề lớn nhất</h1>
2.	Thẻ đoạn văn (<p>): Định nghĩa một đoạn văn. Đoạn văn bản giữa các thẻ <p> sẽ tự động được tạo khoảng cách giữa các đoạn.
o	Ví dụ: <p>Đây là một đoạn văn bản.</p>
3.	Thẻ liên kết (<a href="URL">): Tạo liên kết đến một trang khác hoặc địa chỉ khác trên cùng trang.
4.	Thẻ hình ảnh (<img src="URL">): Được sử dụng để hiển thị hình ảnh, thuộc tính src chứa đường dẫn đến hình ảnh, và alt cung cấp văn bản thay thế cho hình ảnh.
o	Ví dụ: <img src="image.jpg" alt="Hình ảnh mẫu">
5.	Thẻ danh sách (<ul>, <ol>, <li>):
o	<ul>: Tạo danh sách không thứ tự (bullet points).
o	<ol>: Tạo danh sách có thứ tự (số thứ tự).
o	<li>: Đại diện cho một mục trong danh sách.
6.	Thẻ bảng (<table>): Dùng để tạo bảng dữ liệu, với các thẻ con <tr> (hàng), <th> (ô tiêu đề), và <td> (ô dữ liệu).
1.1.4.	Thuộc tính HTML
Thuộc tính trong HTML cung cấp thêm thông tin cho các thẻ. Mỗi thẻ HTML có thể có nhiều thuộc tính, giúp tùy chỉnh cách hiển thị và hoạt động của các phần tử.
Một số thuộc tính quan trọng:
•	class: Dùng để gán lớp CSS cho phần tử, giúp dễ dàng áp dụng kiểu dáng.
•	id: Cung cấp định danh duy nhất cho phần tử, thường dùng để liên kết đến các phần tử bằng JavaScript hoặc CSS.
•	style: Áp dụng kiểu trực tiếp cho phần tử HTML, ví dụ: style="color:red;".
•	alt: Thuộc tính thay thế cho thẻ <img>, mô tả hình ảnh cho trình đọc màn hình.
•	href: Thuộc tính của thẻ <a>, xác định URL đích của liên kết.
•	title: Hiển thị văn bản khi di chuột qua phần tử.
1.1.5.	Khái niệm Block và Inline Elements
Các phần tử HTML được chia thành hai loại:
•	Block elements: Các phần tử này luôn bắt đầu trên dòng mới và chiếm toàn bộ chiều ngang, ví dụ như <div>, <h1>, <p>, <table>.
•	Inline elements: Các phần tử này chỉ chiếm khoảng không cần thiết và không bắt đầu dòng mới, ví dụ như <a>, <span>, <img>.
1.1.6.	Cấu trúc phân cấp của HTML và tổ chức DOM (Document Object Model)
Trong HTML, các phần tử được tổ chức thành cấu trúc phân cấp, nơi các phần tử có thể lồng nhau. Mô hình DOM là cách trình duyệt thể hiện cấu trúc HTML như một cây dữ liệu, giúp các ngôn ngữ như JavaScript truy cập và thao tác với từng phần tử trên trang web.
1.1.7.	Các Thẻ HTML5 Mới
HTML5 đã giới thiệu một số thẻ mới, giúp định nghĩa các phần khác nhau trong trang web một cách rõ ràng hơn:
•	<header>: Định nghĩa phần tiêu đề của trang hoặc một phần lớn.
•	<footer>: Định nghĩa phần chân trang.
•	<article>: Dùng để chứa nội dung độc lập, như một bài viết.
•	<section>: Định nghĩa một phần hoặc một khu vực của trang web.
•	<nav>: Định nghĩa phần liên kết điều hướng.
•	<aside>: Dùng để chứa nội dung bên lề.
1.1.8.	Sử dụng biểu mẫu HTML
Biểu mẫu (<form>) trong HTML cho phép người dùng nhập thông tin và gửi đến máy chủ. Các thẻ con của <form> bao gồm:
•	<input>: Tạo các ô nhập liệu với nhiều loại khác nhau như văn bản, mật khẩu, checkbox, radio.
•	<label>: Gán nhãn cho các trường nhập liệu.
•	<select> và <option>: Tạo danh sách lựa chọn.
•	<textarea>: Tạo vùng nhập văn bản nhiều dòng.
•	<button>: Tạo nút bấm để gửi biểu mẫu.
1.1.9.	Tối ưu hóa HTML cho SEO (Search Engine Optimization)
Các kỹ thuật SEO trong HTML giúp cải thiện thứ hạng trang web trên các công cụ tìm kiếm. Một số kỹ thuật cơ bản:
•	Sử dụng thẻ tiêu đề (<title>) chứa từ khóa.
•	Sử dụng các thẻ tiêu đề từ <h1> đến <h6> hợp lý, với <h1> làm tiêu đề chính.
•	Thêm thẻ mô tả <meta name="description" content="Mô tả về trang"> giúp hiển thị tốt hơn trên công cụ tìm kiếm.
•	Sử dụng thẻ alt mô tả hình ảnh cho SEO hình ảnh.
1.2.	Kiến thức CSS (Cascading Style Sheets)
1.2.1.	Giới thiệu về CSS
CSS (Cascading Style Sheets) là ngôn ngữ định kiểu cho các tài liệu HTML, giúp kiểm soát cách hiển thị các phần tử trên trang web. CSS được sử dụng để thay đổi màu sắc, bố cục, kích thước và các yếu tố hình ảnh khác của nội dung trang web. CSS hoạt động theo cơ chế phân tầng (cascading), nghĩa là các kiểu dáng áp dụng cho một phần tử có thể được kế thừa và ghi đè tùy thuộc vào độ ưu tiên của từng quy tắc.
1.2.2.	Cấu trúc cơ bản của CSS
Một quy tắc CSS cơ bản bao gồm:
•	Selector: Phần tử mà quy tắc CSS sẽ áp dụng (như h1, .class, #id).
•	Declaration block: Bao gồm các thuộc tính và giá trị để định kiểu cho phần tử.
•	Thuộc tính (Property) và Giá trị (Value): Xác định cách hiển thị phần tử.
1.2.3.	Phương pháp áp dụng CSS
Có ba cách cơ bản để áp dụng CSS vào tài liệu HTML:
•	Inline CSS: Được viết trực tiếp vào thuộc tính style của thẻ HTML.
<p style="color: red;">Đoạn văn bản màu đỏ.</p>
•	Internal CSS: Được khai báo trong thẻ <style> bên trong phần <head> của tài liệu HTML.
<head>
    <style>
        p {
            color: green;
        }
    </style>
</head>
•	External CSS: Được viết trong một tệp .css riêng biệt và liên kết với tài liệu HTML thông qua thẻ <link>.
o	<link rel="stylesheet" href="styles.css">
1.2.4.	Bộ chọn CSS (CSS Selectors)
Bộ chọn trong CSS giúp xác định phần tử mà các quy tắc sẽ áp dụng. Một số loại bộ chọn cơ bản:
1.	Bộ chọn phần tử (Element Selector): Áp dụng cho tất cả các thẻ của một loại cụ thể, ví dụ, p { color: blue; }.
2.	Bộ chọn lớp (Class Selector): Áp dụng cho các phần tử có thuộc tính class. Ký hiệu bằng dấu chấm (.), ví dụ, .highlight { color: yellow; }.
3.	Bộ chọn ID (ID Selector): Áp dụng cho phần tử có thuộc tính id. Ký hiệu bằng dấu #, ví dụ, #main { font-size: 20px; }.
4.	Bộ chọn nhóm (Group Selector): Gộp các phần tử bằng dấu phẩy, giúp áp dụng cùng một kiểu cho nhiều phần tử, ví dụ, h1, h2, h3 { color: black; }.
5.	Bộ chọn kết hợp (Combinator Selector): Bao gồm:
o	Chọn tất cả con trực tiếp (>): Ví dụ, div > p.
o	Chọn tất cả con ( ): Ví dụ, div p.
o	Kế tiếp (Adjacent Sibling) (+): Ví dụ, h1 + p.
o	Anh em kế tiếp (General Sibling) (~): Ví dụ, h1 ~ p.
1.2.5.	Các thuộc tính CSS phổ biến
CSS cung cấp hàng trăm thuộc tính khác nhau. Một số thuộc tính cơ bản và thường dùng:
1.	Màu sắc và nền:
o	color: Đặt màu cho văn bản, ví dụ: color: blue;.
o	background-color: Đặt màu nền, ví dụ: background-color: lightgray;.
o	background-image: Đặt ảnh nền, ví dụ: background-image: url('image.jpg');.
2.	Định dạng văn bản:
o	font-size: Đặt kích thước phông chữ, ví dụ: font-size: 16px;.
o	font-family: Chọn loại phông chữ, ví dụ: font-family: Arial, sans-serif;.
o	font-weight: Đặt độ đậm nhạt của chữ, ví dụ: font-weight: bold;.
o	text-align: Canh chỉnh văn bản, ví dụ: text-align: center;.
3.	Khoảng cách và kích thước:
o	padding: Khoảng cách bên trong phần tử.
o	margin: Khoảng cách bên ngoài phần tử.
o	width và height: Đặt chiều rộng và chiều cao cho phần tử.
4.	Đường viền:
o	border: Tạo đường viền cho phần tử, ví dụ: border: 1px solid black;.
o	border-radius: Bo góc đường viền, ví dụ: border-radius: 5px;.
5.	Các thuộc tính về hiển thị:
o	display: Kiểm soát cách hiển thị của phần tử (block, inline, inline-block, none).
o	visibility: Kiểm soát khả năng nhìn thấy của phần tử (visible, hidden).
o	opacity: Điều chỉnh độ trong suốt của phần tử.
1.2.6.	Box Model trong CSS
CSS Box Model là một khái niệm quan trọng, giúp bạn hiểu rõ hơn về cách CSS xác định khoảng cách và kích thước cho các phần tử.
•	Content: Nội dung chính của phần tử, nơi văn bản và hình ảnh được đặt.
•	Padding: Khoảng cách giữa nội dung và đường viền.
•	Border: Đường viền bao quanh phần tử.
•	Margin: Khoảng cách ngoài cùng, tạo khoảng trống giữa phần tử và các phần tử khác.
Ví dụ:
.box {
    width: 100px;
    padding: 10px;
    border: 5px solid black;
    margin: 20px;
}
1.2.7.	Flexbox và Grid
CSS Flexbox và Grid là hai công cụ mạnh mẽ để tạo bố cục linh hoạt cho trang web.
1.	Flexbox: Thiết kế linh hoạt theo hướng hàng hoặc cột, lý tưởng cho bố cục một chiều.
o	Sử dụng thuộc tính display: flex; để kích hoạt Flexbox.
o	justify-content, align-items, và flex-direction là các thuộc tính điều khiển bố cục quan trọng.
2.	CSS Grid: Công cụ bố cục hai chiều cho phép sắp xếp các phần tử theo hàng và cột.
o	Sử dụng thuộc tính display: grid; để kích hoạt CSS Grid.
o	grid-template-columns, grid-template-rows cho phép xác định cấu trúc lưới.
1.2.8.	CSS Responsive Design
Responsive Design giúp trang web tự điều chỉnh phù hợp với các kích thước màn hình khác nhau. Media queries là công cụ chính để kiểm soát điều này.
Ví dụ:
/* Mặc định */
.container {
    width: 100%;
}

/* Thiết lập cho màn hình rộng hơn 768px */
@media (min-width: 768px) {
    .container {
        width: 50%;
    }
}
1.2.9.	CSS Variables và CSS Preprocessors
CSS3 giới thiệu CSS Variables (biến CSS) để tái sử dụng các giá trị trên nhiều nơi, giúp mã CSS ngắn gọn và dễ quản lý.
Ví dụ:
:root {
    --main-color: blueviolet;
}

h1 {
    color: var(--main-color);
}
Ngoài ra, các công cụ như Sass và Less (CSS Preprocessors) cho phép sử dụng các biến, vòng lặp và hàm trong CSS, tăng cường tính tổ chức và khả năng tái sử dụng.
1.2.10.	Tối ưu hóa và tổ chức mã CSS
•	Nguyên tắc BEM (Block, Element, Modifier) giúp tổ chức mã CSS dễ quản lý hơn, bằng cách đặt tên lớp có cấu trúc rõ ràng.
•	Minify CSS: Giảm kích thước tệp CSS, giúp trang tải nhanh hơn.
•	Sử dụng công cụ kiểm tra: Kiểm tra và sửa các lỗi cú pháp và hiệu năng của CSS.
1.3.	Kiến thức JavaScript (JS)
1.3.1.	Giới thiệu về JavaScript
JavaScript (JS) là ngôn ngữ lập trình phía client được sử dụng rộng rãi để thêm tính tương tác cho các trang web. Được tích hợp vào các trình duyệt web, JavaScript giúp phát triển các ứng dụng web động và có thể chạy trực tiếp trên trình duyệt mà không cần gửi yêu cầu đến máy chủ.
1.3.2.	Cú pháp và biến
•	Khai báo biến: JavaScript cung cấp ba từ khóa để khai báo biến:
o	var: Phạm vi toàn cục hoặc cục bộ (trong hàm), có thể khai báo lại.
o	let: Phạm vi khối (block-scoped), không thể khai báo lại.
o	const: Khai báo hằng số, giá trị không thể thay đổi.
•	Kiểu dữ liệu: JavaScript hỗ trợ các kiểu dữ liệu cơ bản:
o	Primitive: string, number, boolean, null, undefined, symbol.
o	Non-Primitive: object, array, function.
•	Toán tử: JavaScript có các loại toán tử cơ bản như toán tử số học (+, -, *, /, %), toán tử so sánh (==, !=, ===, !==), và toán tử logic (&&, ||, !).
1.3.3.	Cấu trúc điều khiển
JavaScript cung cấp các cấu trúc điều khiển để điều hướng dòng chảy của chương trình:
•	Cấu trúc điều kiện:
o	if, else if, else: Kiểm tra các điều kiện và thực hiện các hành động tương ứng.
if (age > 18) {
    console.log("You are an adult.");
} else {
    console.log("You are a minor.");
}
•	Cấu trúc lặp:
o	for: Lặp với một điều kiện và số lần cụ thể.
o	while: Lặp cho đến khi một điều kiện không còn đúng.
o	do...while: Lặp ít nhất một lần trước khi kiểm tra điều kiện.
o	for (let i = 0; i < 5; i++) {
	console.log(i);
o	}
•	Switch-case: Kiểm tra giá trị của biến và thực thi các khối lệnh tương ứng với từng trường hợp.
switch (day) {
    case "Monday":
        console.log("Start of the week!");
        break;
    case "Friday":
        console.log("Almost weekend!");
        break;
    default:
        console.log("Midweek!");
}
1.3.4.	Hàm trong JavaScript
Hàm là khối mã thực hiện các tác vụ nhất định và có thể tái sử dụng. JavaScript hỗ trợ nhiều cách khai báo hàm:
•	Hàm cơ bản:
function greet(name) {
    return "Hello, " + name;
}
•	Hàm ẩn danh và hàm mũi tên (Arrow function):
o	Hàm ẩn danh: Không có tên, thường được sử dụng trong các hàm bậc cao.
o	Arrow function: Cú pháp ngắn gọn, không ràng buộc this.
const add = (a, b) => a + b;
1.3.5.	DOM Manipulation (Tương tác với DOM)
Document Object Model (DOM) là cấu trúc cây của tài liệu HTML, giúp JavaScript truy cập và thao tác các phần tử trên trang.
•	Truy xuất phần tử:
o	document.getElementById("id"): Lấy phần tử theo id.
o	document.querySelector(".class"): Lấy phần tử đầu tiên theo class.
o	document.querySelectorAll("selector"): Lấy tất cả các phần tử theo bộ chọn.
•	Thay đổi nội dung và thuộc tính:
o	element.textContent hoặc element.innerHTML: Thay đổi nội dung của phần tử.
o	element.style: Thay đổi các thuộc tính CSS.
•	Thêm và xóa phần tử:
o	createElement(): Tạo một phần tử HTML mới.
o	appendChild(), removeChild(): Thêm hoặc xóa phần tử khỏi DOM.
1.3.6.	Sự kiện trong JavaScript
JavaScript có thể phản hồi với các hành động của người dùng thông qua các sự kiện.
•	Các loại sự kiện phổ biến:
o	Sự kiện chuột: click, mouseover, mouseout.
o	Sự kiện bàn phím: keydown, keyup.
o	Sự kiện form: submit, focus, blur.
•	Xử lý sự kiện:
o	Có thể gán trực tiếp hoặc sử dụng addEventListener.
const button = document.querySelector("button");
button.addEventListener("click", function() {
    alert("Button clicked!");
});
1.3.7.	JSON (JavaScript Object Notation)
JSON là định dạng dữ liệu nhẹ giúp JavaScript trao đổi dữ liệu dễ dàng giữa client và server. JavaScript hỗ trợ chuyển đổi qua lại giữa JSON và các đối tượng JavaScript.
•	Chuyển đổi từ đối tượng sang JSON: JSON.stringify(object)
•	Chuyển đổi từ JSON sang đối tượng: JSON.parse(jsonString)
Ví dụ:
const jsonString = '{"name": "John", "age": 30}';
const obj = JSON.parse(jsonString);
console.log(obj.name); // John
1.3.8.	Bất đồng bộ trong JavaScript
JavaScript hỗ trợ xử lý bất đồng bộ, giúp các tác vụ dài không làm chặn giao diện người dùng.
•	Callback: Hàm được gọi sau khi một tác vụ kết thúc.
function loadData(callback) {
    // Giả lập tải dữ liệu
    setTimeout(() => {
        callback("Data loaded");
    }, 1000);
}
•	Promise: Đối tượng biểu diễn kết quả của tác vụ bất đồng bộ.
const promise = new Promise((resolve, reject) => {
    setTimeout(() => resolve("Done!"), 1000);
});
promise.then(result => console.log(result));
•	Async/Await: Cú pháp gọn gàng hơn cho việc xử lý promise.
async function fetchData() {
    let result = await promise;
    console.log(result);
}
1.3.9.	JavaScript và API
JavaScript có thể lấy và gửi dữ liệu từ server thông qua API, thường sử dụng fetch API hoặc XMLHttpRequest.
Ví dụ sử dụng fetch API:
fetch("https://api.example.com/data")
    .then(response => response.json())
    .then(data => console.log(data))
    .catch(error => console.error("Error:", error));
1.3.10.	JavaScript Frameworks và Thư viện
JavaScript có các thư viện và framework phổ biến giúp phát triển ứng dụng nhanh và hiệu quả hơn:
•	Thư viện: jQuery, D3.js.
•	Framework: React, Vue, Angular.
1.4.	Kiến thức PHP
1.4.1.	Giới thiệu về PHP
PHP (Hypertext Preprocessor) là một ngôn ngữ kịch bản phía server phổ biến, thường dùng để phát triển các ứng dụng web. PHP có thể nhúng trực tiếp vào mã HTML và có khả năng tạo nội dung động, tương tác với cơ sở dữ liệu, quản lý session, cookie và bảo mật. Mã PHP được xử lý trên server, và kết quả sẽ trả về cho trình duyệt dưới dạng HTML.
1.4.2.	Cú pháp cơ bản của PHP
•	Mã PHP và HTML:
o	Mã PHP được đặt giữa các thẻ <?php ... ?>.
o	Có thể nhúng PHP trực tiếp vào HTML hoặc sử dụng các đoạn mã riêng biệt.
o	Tất cả các biến trong PHP bắt đầu bằng ký tự $.
o	Biến trong PHP không cần khai báo kiểu dữ liệu và có thể gán bất kỳ giá trị nào.
$name = "John";
$age = 25;
$isStudent = true;
•	Kiểu dữ liệu:
o	Các kiểu dữ liệu chính gồm: string, integer, float, boolean, array, object, null.
o	Sử dụng hàm gettype($variable) để kiểm tra kiểu dữ liệu của một biến.
•	Toán tử:
o	PHP có các toán tử số học (+, -, *, /, %), toán tử so sánh (==, !=, ===, !==), và toán tử logic (&&, ||, !).
1.4.3.	Cấu trúc điều khiển
•	Cấu trúc điều kiện:
o	Sử dụng if, else if, else để thực hiện các điều kiện.
o	PHP cũng hỗ trợ cấu trúc switch-case.
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
•	Vòng lặp:
o	Các vòng lặp phổ biến trong PHP: for, while, do...while, và foreach.
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
1.4.4.	Hàm trong PHP
•	Khai báo và sử dụng hàm:
o	Hàm trong PHP được khai báo bằng từ khóa function.
o	Có thể sử dụng tham số và giá trị trả về.
function greet($name) {
    return "Hello, " . $name;
}

echo greet("John");
•	Biến toàn cục và biến cục bộ:
o	Biến khai báo trong hàm là biến cục bộ, trong khi biến khai báo ngoài hàm có thể được truy cập bên trong hàm bằng cách sử dụng từ khóa global.
•	Hàm ẩn danh:
o	PHP hỗ trợ hàm ẩn danh, có thể lưu trữ trong biến và truyền vào các hàm khác.
$greet = function($name) {
    return "Hello, " . $name;
};

echo $greet("John");
1.4.5.	Mảng trong PHP
PHP hỗ trợ nhiều loại mảng: mảng chỉ mục (indexed array), mảng kết hợp (associative array), và mảng đa chiều.
•	Mảng chỉ mục:
$fruits = ["Apple", "Banana", "Orange"];
•	Mảng kết hợp:
$person = ["name" => "John", "age" => 25];
•	Mảng đa chiều:
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
•	Vòng lặp qua mảng:
o	Sử dụng foreach để lặp qua các phần tử trong mảng.
foreach ($fruits as $fruit) {
    echo $fruit;
}
1.4.6.	Làm việc với Form và dữ liệu người dùng
•	Gửi dữ liệu từ Form:
o	Form có thể sử dụng phương thức POST hoặc GET để gửi dữ liệu.
o	Dữ liệu nhận được từ form có thể được truy cập qua biến toàn cục $_POST hoặc $_GET.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "Hello, " . $name;
}
•	Kiểm tra và làm sạch dữ liệu đầu vào:
o	Luôn làm sạch dữ liệu đầu vào để ngăn chặn các lỗ hổng bảo mật.
o	Sử dụng htmlspecialchars(), trim(), và filter_var() để làm sạch dữ liệu.
1.4.7.	Làm việc với cơ sở dữ liệu MySQL
PHP cung cấp nhiều cách để kết nối và tương tác với MySQL, phổ biến nhất là sử dụng PDO (PHP Data Objects) hoặc MySQLi.
•	Kết nối cơ sở dữ liệu:
o	Sử dụng PDO để thiết lập kết nối với MySQL và thực hiện truy vấn.
$pdo = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");
•	Thực thi truy vấn:
o	Dùng phương thức prepare() và execute() để thực thi các truy vấn có tham số.
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(["id" => $userId]);
$user = $stmt->fetch();
•	Thao tác với dữ liệu:
o	Thực hiện các thao tác SELECT, INSERT, UPDATE, và DELETE để quản lý dữ liệu trong cơ sở dữ liệu.
1.4.8.	Session và Cookie trong PHP
•	Session:
o	Session giúp lưu trữ thông tin của người dùng trong suốt quá trình truy cập vào trang web.
o	Bắt đầu một session bằng session_start() và lưu thông tin vào $_SESSION.
session_start();
$_SESSION["username"] = "John";
•	Cookie:
o	Cookie là một cách khác để lưu trữ dữ liệu người dùng trên trình duyệt.
o	Sử dụng setcookie() để tạo cookie và $_COOKIE để truy cập dữ liệu từ cookie.
setcookie("username", "John", time() + (86400 * 30), "/");
1.4.9.	Bảo mật trong PHP
•	Tránh SQL Injection:
o	Sử dụng câu truy vấn có tham số với PDO để tránh SQL Injection.
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute(["email" => $email]);
•	XSS (Cross-Site Scripting):
o	Luôn làm sạch dữ liệu đầu vào với htmlspecialchars() để ngăn chặn mã độc từ người dùng.
•	Bảo mật thông tin người dùng:
o	Mã hóa mật khẩu người dùng bằng hàm password_hash() và xác thực bằng password_verify().
$hashedPassword = password_hash("password123", PASSWORD_DEFAULT);
1.4.10.	PHP và APIs
•	Gửi yêu cầu HTTP:
o	PHP có thể gửi yêu cầu HTTP đến các API bên ngoài bằng cách sử dụng file_get_contents() hoặc cURL.
$response = file_get_contents("https://api.example.com/data");
•	Phân tích JSON:
o	Dữ liệu JSON nhận được từ API có thể phân tích và chuyển thành mảng hoặc đối tượng PHP bằng json_decode().
$data = json_decode($response, true);
1.4.11.	Frameworks phổ biến của PHP
PHP có nhiều framework phổ biến giúp đơn giản hóa quá trình phát triển web, bao gồm:
•	Laravel: Hỗ trợ nhiều tính năng hiện đại và có hệ sinh thái mạnh mẽ.
•	CodeIgniter: Nhẹ, nhanh, phù hợp với các ứng dụng đơn giản.
•	Symfony: Cấu trúc chắc chắn, mạnh mẽ, phù hợp với các dự án lớn.
PHẦN II: PHÂN TÍCH CHƯƠNG TRÌNH
Ứng dụng  đặt hàng mua-bán sản phẩm theo danh mục qua mạng có các chức năng
•	Chức năng kết nối Cơ sở dữ liệu
o	 Có chức năng kết nối và tương tác đến cơ sở dữ liệu đến mysql
•	Chức năng phía khách hàng: 
o	Chức năng hiển thị sản phẩm cho khách hàng xem và chọn mua sản phẩm 
o	Chức năng mua hàng cho khách hàng 
•	Chức năng phía admin 
o	Đăng nhập, đăng xuất 
o	Quản lý sản phẩm (đọc, thêm, sửa, xóa sản phẩm) thêm hình ảnh sản phẩm ở trong máy tính
o	Quản lý đơn hàng (đọc, thêm, sửa, xóa đơn hàng) 
o	Quản lý tài khoản (đọc, thêm, sửa, xóa tài khoản) mật khẩu phía user được mã hóa bằng thuật toán bcrypt 
Chương trình này sử dụng Apache,PHP để hiển thị trang và dùng MySQL để làm cơ sở dữ liệu
2.1.	Cấu trúc tệp của chương trình
Dưới đây là phần phân tích chi tiết từng tệp tin trong thư mục THPHP, tổ chức theo từng thư mục và mục đích sử dụng của từng tệp:
 
2.1.1.	Thư mục chính THPHP
  
•	index.php: Đây là tệp chính, có thể là trang chủ của ứng dụng web. Tệp này có thể cung cấp các liên kết đến các trang khác hoặc hiển thị thông tin tổng quan về ứng dụng.
•	process_order.php: Xử lý các thao tác liên quan đến đơn hàng, như thêm đơn hàng mới vào cơ sở dữ liệu hoặc cập nhật trạng thái của đơn hàng.
•	style.css: Tệp CSS này chứa các quy tắc định dạng chung cho giao diện người dùng, bao gồm bố cục, màu sắc, và phong cách của trang web.
•	product_list.php:Hiển thị các sản phẩm để khách hàng có thể đặt hàng
2.1.2.	Thư mục includes\

 
•	database.php: Chứa thông tin cấu hình để kết nối cơ sở dữ liệu, như tên máy chủ, tên cơ sở dữ liệu, tên người dùng và mật khẩu. Tệp này thường sử dụng PDO hoặc MySQLi để tạo kết nối với cơ sở dữ liệu, cho phép các tệp khác truy cập cơ sở dữ liệu dễ dàng hơn.
•	footer.php: Chứa mã HTML cho phần chân trang (footer) của trang web. Tệp này có thể bao gồm bản quyền, liên kết liên quan, hoặc thông tin liên hệ.
•	header.php: Chứa mã HTML cho phần đầu trang (header) của trang web, bao gồm logo, menu điều hướng, và thông tin người dùng đăng nhập (nếu có).
2.1.3.	Thư mục images\
•	Chứa hình ảnh sử dụng trong trang web, có thể bao gồm logo, ảnh sản phẩm, hoặc ảnh minh họa. Hình ảnh giúp giao diện người dùng trở nên sinh động và hấp dẫn hơn.
2.1.4.	Thư mục admin\
 
Thư mục này chứa các tệp dành riêng cho khu vực quản trị, nơi quản trị viên có thể quản lý sản phẩm, đơn hàng và người dùng.
2.1.5.	Thư mục css\
 
•	style.css: Đây là tệp CSS dành riêng cho giao diện quản trị. Nó cung cấp các quy tắc định dạng cho các thành phần trong khu vực quản trị như bảng điều khiển, nút quản lý và các biểu mẫu.
2.1.6.	Thư mục js\

 
•	order.js: Chứa mã JavaScript để quản lý các thao tác liên quan đến đơn hàng, như thêm, sửa, hoặc xóa đơn hàng. Mã này có thể bao gồm cả việc hiển thị và ẩn các cửa sổ popup cho các thao tác trên đơn hàng.
•	product.js: Tương tự order.js, nhưng dành cho các sản phẩm. Tệp này hỗ trợ các thao tác chỉnh sửa và xóa sản phẩm, cũng như hiển thị chi tiết sản phẩm trong popup khi cần.
•	user.js: Quản lý các thao tác liên quan đến người dùng, như thêm, sửa, và xóa người dùng. Tệp này cũng có thể bao gồm logic để xác nhận hành động xóa hoặc hiển thị thông tin người dùng chi tiết.
2.1.7.	Các tệp quản lý trong admin\


 
•	add_order.php: Xử lý việc thêm mới một đơn hàng. Tệp này thường có một biểu mẫu để nhập thông tin đơn hàng, và khi biểu mẫu được gửi, dữ liệu sẽ được lưu vào cơ sở dữ liệu.
•	add_product.php: Xử lý việc thêm sản phẩm mới vào cơ sở dữ liệu. Biểu mẫu có thể bao gồm các trường như tên sản phẩm, giá, và ảnh sản phẩm.
•	add_user.php: Cho phép thêm người dùng mới vào hệ thống quản trị. Thường yêu cầu các thông tin như tên người dùng, mật khẩu và email.
•	admin_dashboard.php: Trang tổng quan dành cho quản trị viên, hiển thị các thống kê quan trọng hoặc các liên kết nhanh đến các phần quản lý sản phẩm, đơn hàng, và người dùng.
•	delete_order.php: Xử lý việc xóa một đơn hàng khỏi cơ sở dữ liệu. Thông thường sẽ có xác nhận trước khi xóa để tránh việc xóa nhầm.
•	delete_product.php: Tương tự delete_order.php, nhưng áp dụng cho sản phẩm. Khi được xác nhận, tệp này sẽ xóa sản phẩm khỏi cơ sở dữ liệu.
•	delete_user.php: Cho phép xóa người dùng khỏi hệ thống. Tệp này đảm bảo rằng quyền truy cập của người dùng đó vào hệ thống sẽ bị thu hồi.
•	edit_order.php: Cho phép quản trị viên chỉnh sửa thông tin của đơn hàng, như cập nhật trạng thái đơn hàng hoặc thay đổi thông tin liên quan.
•	edit_product.php: Tương tự edit_order.php, cho phép chỉnh sửa thông tin sản phẩm, bao gồm tên, giá, và ảnh sản phẩm.
•	edit_user.php: Cho phép quản trị viên chỉnh sửa thông tin người dùng, như tên người dùng hoặc email.
•	footer1.php: Phần footer dành riêng cho khu vực quản trị, có thể bao gồm các liên kết nhanh và thông tin bản quyền.
•	header1.php: Phần header dành riêng cho khu vực quản trị, hiển thị menu điều hướng dành cho quản trị viên và tên người quản trị đã đăng nhập.
•	login.php: Tệp đăng nhập cho khu vực quản trị, yêu cầu quản trị viên nhập tên người dùng và mật khẩu. Khi đăng nhập thành công, quản trị viên sẽ được chuyển đến admin_dashboard.php.
•	logout.php: Tệp này xử lý đăng xuất, xóa các phiên đăng nhập và chuyển quản trị viên ra khỏi khu vực quản trị.
•	order_list.php: Hiển thị danh sách các đơn hàng hiện có, cho phép quản trị viên xem chi tiết và thực hiện các thao tác như chỉnh sửa hoặc xóa.
•	product_list.php: Hiển thị danh sách sản phẩm trong hệ thống, cho phép quản trị viên chỉnh sửa hoặc xóa sản phẩm.
•	user_list.php: Hiển thị danh sách người dùng trong hệ thống quản trị, cho phép quản trị viên chỉnh sửa hoặc xóa người dùng.
Phân tích trên cung cấp cái nhìn tổng quan và chi tiết về từng tệp trong dự án, giúp bạn dễ dàng hiểu cấu trúc và chức năng của từng phần trong ứng dụng THPHP.
2.2.	Chức năng mã nguồn  chi tiết của từng phần 
2.2.1.	database.php
Dùng để kết nối tới cơ sở dữ liệu MySQL bằng cách sử dụng PDO (PHP Data Objects), một phương pháp phổ biến để làm việc với cơ sở dữ liệu trong PHP. Dưới đây là phần giải thích chi tiết cho từng dòng mã:
•	Khai báo các biến cấu hình kết nối:
$host = 'localhost';
$db = 'qlbh';
$user = 'root';
$password = '123456';
o	$host = 'localhost';: Địa chỉ máy chủ cơ sở dữ liệu, ở đây là localhost, thường được sử dụng khi cơ sở dữ liệu nằm trên cùng máy chủ với ứng dụng PHP.
o	$db = 'qlbh';: Tên của cơ sở dữ liệu mà bạn muốn kết nối. Trong trường hợp này, cơ sở dữ liệu có tên là qlbh.
o	$user = 'root';: Tên người dùng để truy cập cơ sở dữ liệu. Ở đây, tên người dùng là root, đây là tên người dùng mặc định cho MySQL.
o	$password = '123456';: Mật khẩu cho người dùng root. Ở đây mật khẩu được thiết lập là 123456.
•	Thiết lập kết nối đến cơ sở dữ liệu với PDO:
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
o	new PDO("mysql:host=$host;dbname=$db", $user, $password);: Tạo một đối tượng PDO mới để kết nối tới cơ sở dữ liệu MySQL. Tham số đầu tiên là DSN (Data Source Name) chứa thông tin về loại cơ sở dữ liệu (mysql), máy chủ ($host), và tên cơ sở dữ liệu ($db). Hai tham số tiếp theo là tên người dùng ($user) và mật khẩu ($password).
o	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);: Thiết lập chế độ báo lỗi cho PDO. PDO::ATTR_ERRMODE là một thuộc tính kiểm soát cách thức xử lý lỗi. PDO::ERRMODE_EXCEPTION báo cho PDO ném ra một ngoại lệ (exception) nếu có lỗi xảy ra. Điều này giúp dễ dàng xử lý lỗi hơn.
•	Xử lý lỗi kết nối:
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}
o	catch (PDOException $e): Khối catch này bắt các ngoại lệ PDO (PDOException) nếu có lỗi xảy ra trong quá trình kết nối.
o	die("Kết nối thất bại: " . $e->getMessage());: Nếu có lỗi, chương trình sẽ dừng lại (sử dụng die) và hiển thị thông báo "Kết nối thất bại:" kèm theo thông báo lỗi chi tiết ($e->getMessage()), giúp dễ dàng xác định nguyên nhân lỗi.
2.2.2.	index.php
Đây là đoạn mã PHP dùng để hiển thị trang chính của một ứng dụng web và bao gồm các tệp khác để tạo cấu trúc trang đầy đủ, khi người dùng truy cập tên miền thì trang này hiển thị đầu tiên. Dưới đây là giải thích chi tiết cho từng phần:
•	Khởi động Session:
session_start(); 
o	session_start();: Hàm này khởi động hoặc tiếp tục một phiên làm việc (session) hiện tại. Phiên làm việc lưu trữ thông tin đăng nhập của người dùng, cho phép giữ trạng thái đăng nhập và các thông tin khác khi người dùng di chuyển giữa các trang. Nếu trang này yêu cầu người dùng đăng nhập, session_start() sẽ giúp lấy các thông tin liên quan từ session.
•	Bao gồm tệp header.php:
<?php include 'includes/header.php'; ?>
o	include 'includes/header.php';: Dòng này thêm nội dung của tệp header.php vào vị trí hiện tại trong trang. Thông thường, header.php chứa phần đầu trang HTML như logo, tiêu đề trang, và thanh điều hướng (navigation) để người dùng có thể chuyển giữa các phần của ứng dụng.
•	Phần nội dung chính (<main>):
<main>
    <h2>Trang chính</h2>
    <p>Đây là trang chính của ứng dụng.</p>
</main>
o	<main>: Thẻ HTML <main> chứa nội dung chính của trang.
o	<h2>Trang chính</h2>: Thẻ tiêu đề <h2> với nội dung "Trang chính", giúp người dùng biết rằng đây là trang chính của ứng dụng.
o	<p>Đây là trang chính của ứng dụng.</p>: Thẻ <p> chứa một đoạn văn mô tả ngắn về trang, thường là lời giới thiệu ngắn hoặc thông tin tổng quan.
•	Bao gồm tệp product_list.php:
<?php include 'product_list.php'; ?>
o	include 'product_list.php';: Lệnh này thêm nội dung từ tệp product_list.php. Tệp này có thể chứa danh sách các sản phẩm hoặc các nội dung liên quan đến sản phẩm, và thường là một phần quan trọng của ứng dụng quản lý sản phẩm.
•	Bao gồm tệp footer.php:
<?php include 'includes/footer.php'; ?>
o	include 'includes/footer.php';: Lệnh này thêm nội dung từ tệp footer.php, thường chứa phần chân trang (footer) với các thông tin bổ sung như bản quyền, liên kết đến các trang mạng xã hội, hoặc thông tin liên hệ.

2.2.3.	product_list.php(Phía người dùng)
Đoạn mã này là một trang phía người dùng hiển thị danh sách các sản phẩm từ cơ sở dữ liệu và cho phép người dùng thực hiện mua hàng qua một popup với các thông tin đặt hàng
Phần PHP
•	Kết nối cơ sở dữ liệu:
include 'includes/database.php';
o	include 'includes/database.php';: Kết nối đến tệp database.php, chứa thông tin kết nối cơ sở dữ liệu bằng PDO để truy xuất dữ liệu từ bảng SanPham.
•	Truy vấn lấy sản phẩm:

$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();
o	query("SELECT * FROM SanPham"): Truy vấn này lấy tất cả các sản phẩm từ bảng SanPham.
o	$products = $stmt->fetchAll();: Lưu tất cả các bản ghi kết quả vào mảng $products để hiển thị trên trang.
Phần HTML và Hiển thị Danh sách Sản phẩm
•	Hiển thị danh sách sản phẩm:
<main>
    <h1>Danh sách sản phẩm</h1>
    <div class="product-list">
        <?php foreach ($products as $product): ?>
            <div class="product-item">
                <img src="images/<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
                <h2><?= htmlspecialchars($product['product_name']) ?></h2>
                <p>Giá: <?= number_format($product['price'], 0) ?> VNĐ</p>
                <button class="buy-btn" data-product-id="<?= $product['product_id'] ?>" data-product-name="<?= htmlspecialchars($product['product_name']) ?>" data-product-price="<?= $product['price'] ?>">Mua hàng</button>
            </div>
        <?php endforeach; ?>
    </div>
</main>
o	foreach ($products as $product): Lặp qua từng sản phẩm trong $products để hiển thị.
o	<img src="images/...">: Hiển thị hình ảnh sản phẩm, lấy từ trường image_url.
o	<h2> và <p>: Hiển thị tên và giá sản phẩm, giá được định dạng theo dạng tiền tệ (number_format).
o	<button class="buy-btn"...>: Nút "Mua hàng" có các thuộc tính data- để lưu thông tin sản phẩm như product_id, product_name, và price. Những dữ liệu này sẽ dùng trong popup mua hàng.
Popup Thông Tin Mua Hàng
•	Popup mua hàng:
<div id="purchase-modal" style="display:none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Thông tin mua hàng</h2>
        <form id="purchase-form">
            <input type="hidden" name="product_id" id="product_id">
            <label for="customer_info">Thông tin người mua:</label>
            <input type="text" name="customer_info" id="customer_info" required>

            <!-- Add Customer Contact Field -->
            <label for="customer_contact">Liên hệ:</label>
            <input type="text" name="customer_contact" id="customer_contact" required>

            <label for="quantity">Số lượng:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
            <button type="submit">Xác nhận mua hàng</button>
        </form>        
    </div>
</div>
o	#purchase-modal: Div này ẩn (display:none;) và chỉ hiện khi nhấn vào nút "Mua hàng". Popup chứa một biểu mẫu (<form>) để người dùng điền thông tin mua hàng.
o	<input type="hidden" name="product_id" id="product_id">: Trường ẩn để lưu product_id của sản phẩm mà người dùng chọn.
o	Các trường nhập (<input>): Bao gồm customer_info (thông tin người mua), customer_contact (liên hệ người mua), và quantity (số lượng sản phẩm muốn mua).
o	<button type="submit">Xác nhận mua hàng</button>: Nút để xác nhận và gửi thông tin mua hàng.
Phần JavaScript và Xử Lý Popup
•	Xử lý sự kiện với jQuery:
$(document).ready(function() {
    // Mở popup khi nhấn nút mua hàng
    $('.buy-btn').click(function() {
        var productId = $(this).data('product-id');
        $('#product_id').val(productId);
        $('#purchase-modal').show();
    });

    // Đóng popup khi nhấn nút đóng
    $('.close').click(function() {
        $('#purchase-modal').hide();
    });

    // Gửi thông tin mua hàng
    $('#purchase-form').submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'process_order.php',
            data: $(this).serialize(),
            success: function(response) {
                alert(response); // Hiển thị thông báo
                $('#purchase-modal').hide();
            }
        });
    });
});
o	$('.buy-btn').click(...): Khi nhấn nút "Mua hàng", popup hiện lên và trường product_id được cập nhật bằng giá trị từ thuộc tính data-product-id của nút.
o	$('.close').click(...): Khi nhấn nút đóng (x), popup bị ẩn đi.
o	$('#purchase-form').submit(...): Khi người dùng xác nhận đơn hàng, sự kiện submit của biểu mẫu bị chặn lại (e.preventDefault()) và một yêu cầu AJAX POST được gửi đến process_order.php.
	data: $(this).serialize(): Gửi toàn bộ dữ liệu trong form.
	success: function(response): Khi yêu cầu thành công, hiển thị thông báo và ẩn popup.
Đoạn mã  bao gồm một số hàm JavaScript dùng để quản lý việc hiển thị và đóng các popup (hộp thoại) trong một giao diện web, đặc biệt là các popup liên quan đến chỉnh sửa, xóa và thêm đơn hàng. Các popup này có thể chứa các form cho phép người dùng sửa thông tin đơn hàng, xóa đơn hàng, hoặc thêm một đơn hàng mới.


2.2.4.	product_list.php(Phía quản trị viên)
Đoạn mã này hiển thị danh sách sản phẩm ,thêm sửa xóa sản phẩm và có thể thêm ảnh sản phẩm từ tập tin máy tính
•	Lấy danh sách sản phẩm từ cơ sở dữ liệu
$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();
o	Ý nghĩa: Truy vấn tất cả sản phẩm từ bảng SanPham trong cơ sở dữ liệu và lưu trữ vào mảng $products.
o	Mục đích: Hiển thị danh sách sản phẩm trong bảng HTML.
•	Thêm sản phẩm mới
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ...
    $stmt = $pdo->prepare("INSERT INTO SanPham (product_id, product_name, price, image_url, category_name) VALUES (?,?,?,?,?)");
    $stmt->execute([$product_id, $product_name, $price, $image_url, $category_name]);
    header("Location: product_list.php");
    exit();
}
o	Ý nghĩa:
	Kiểm tra nếu request là POST, sau đó nhận thông tin từ form (product_name, price, category_name...).
	Xử lý tệp ảnh tải lên (nếu có) và lưu đường dẫn ảnh vào cơ sở dữ liệu.
	Chèn sản phẩm mới vào bảng SanPham và chuyển hướng về trang danh sách sản phẩm.
o	Mục đích: Thêm sản phẩm mới từ giao diện người dùng.
•	Cập nhật thông tin sản phẩm
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ...
    $stmt = $pdo->prepare("UPDATE SanPham SET product_name = ?, price = ?, image_url = ?, category_name = ? WHERE product_id = ?");
    $stmt->execute([$product_name, $price, $image_url, $category_name, $product_id]);
    header("Location: product_list.php");
    exit();
}
o	Ý nghĩa:
	Nhận thông tin sản phẩm từ form chỉnh sửa (bao gồm ảnh nếu có).
	Cập nhật dữ liệu sản phẩm trong bảng SanPham.
	Chuyển hướng về trang danh sách sản phẩm.
o	Mục đích: Chỉnh sửa thông tin sản phẩm.
•	Xóa sản phẩm
if (isset($_POST['delete_product_id'])) {
    $product_id = $_POST['delete_product_id'];
    ...
    $deleteQuery = "DELETE FROM sanpham WHERE product_id = :product_id";
    $deleteStmt = $pdo->prepare($deleteQuery);
    $deleteStmt->execute(['product_id' => $product_id]);
    echo "Sản phẩm đã được xóa thành công.";
}
o	Ý nghĩa:
	Xóa sản phẩm khỏi bảng SanPham nếu không bị tham chiếu bởi bảng khác (ví dụ: đơn hàng).
	Sử dụng câu lệnh DELETE để xóa sản phẩm theo product_id.
o	Mục đích: Đảm bảo an toàn khi xóa dữ liệu.
•	Giao diện hiển thị sản phẩm
<?php foreach ($products as $product) { ?>
<tr>
    <td><?php echo $product['product_id']; ?></td>
    <td><?php echo $product['product_name']; ?></td>
    <td><?php echo number_format($product['price'], 0, ',', '.'); ?> VNĐ</td>
    <td><img src="../images/<?php echo htmlspecialchars($product['image_url']); ?>" alt="<?php echo htmlspecialchars($product['product_name']); ?>"></td>
    <td><?php echo $product['category_name']; ?></td>
    <td>
        <button onclick="openPopup(<?php echo $product['product_id']; ?>, '<?php echo addslashes($product['product_name']); ?>', <?php echo $product['price']; ?>, '<?php echo addslashes($product['image_url']); ?>', '<?php echo addslashes($product['category_name']); ?>')" class="edit-button">Sửa</button>
        <a href="javascript:void(0);" onclick="openDeletePopup(<?php echo $product['product_id']; ?>)" class="delete-button">Xóa</a>
    </td>
</tr>
<?php } ?>
o	Ý nghĩa:
	Duyệt qua mảng $products và hiển thị từng sản phẩm trong bảng.
	Thêm nút "Sửa" và "Xóa" với chức năng JavaScript để mở popup chỉnh sửa hoặc xác nhận xóa.
o	Mục đích: Tạo giao diện trực quan để quản lý sản phẩm.
•	Popup chỉnh sửa và thêm sản phẩm
<div class="popup" id="editPopup">
    <form action="edit_product.php" method="post" enctype="multipart/form-data">
        ...
        <button type="submit" class="submit-btn">Lưu thay đổi</button>
    </form>
</div>
o	Ý nghĩa:
	Form này chứa thông tin sản phẩm cần chỉnh sửa hoặc thêm mới.
	Dữ liệu từ form sẽ được gửi đến file xử lý tương ứng (edit_product.php hoặc add_product.php).
o	Mục đích: Cung cấp giao diện để người dùng chỉnh sửa hoặc thêm sản phẩm.


2.2.5.	order_list.php
Đoạn mã  dưới đây có chức năng hiển thị danh sách đơn hàng, đồng thời cung cấp các popup cho việc thêm, sửa và xóa đơn hàng trong một hệ thống quản lý đơn hàng. Dưới đây là giải thích chi tiết về các phần quan trọng trong đoạn mã:
•	Kết nối cơ sở dữ liệu và lấy dữ liệu
include '../includes/database.php';
include 'header1.php'; // Bao gồm header
o	Đoạn mã này bao gồm hai tệp PHP:
	database.php: Chứa mã để kết nối đến cơ sở dữ liệu MySQL và khởi tạo đối tượng PDO ($pdo).
	header1.php: Bao gồm phần header của trang web.
// Lấy dữ liệu đơn hàng
// Fetch all orders
$stmt = $pdo->query("SELECT * FROM DonHang");
$orders = $stmt->fetchAll();

// Fetch all products
$productStmt = $pdo->query("SELECT * FROM SanPham");
$products = $productStmt->fetchAll();
o	Lấy danh sách đơn hàng:
	Sử dụng câu truy vấn SQL SELECT * FROM DonHang để lấy tất cả các đơn hàng từ bảng DonHang.
	fetchAll() trả về một mảng chứa tất cả các kết quả từ câu truy vấn.
o	Lấy danh sách sản phẩm:
	Tương tự, câu truy vấn SELECT * FROM SanPham lấy tất cả sản phẩm từ bảng SanPham.
•	Hiển thị danh sách đơn hàng
<main>
    <h2>Danh Sách Đơn Hàng</h2>
    <button onclick="openAddOrderPopup()" class="add-order-btn">Thêm đơn hàng mới</button>
o	Tiêu đề: Hiển thị tiêu đề "Danh Sách Đơn Hàng".
o	Nút Thêm Đơn Hàng: Nút này khi nhấn sẽ mở popup để thêm đơn hàng mới, sử dụng JavaScript (openAddOrderPopup()).
<table>
    <tr>
        <th>Mã đơn hàng</th>
        <th>Tên khách hàng</th>
        <th>Số điện thoại</th>
        <th>Tổng số tiền</th>
        <th>Hành động</th>
    </tr>
    <?php foreach ($orders as $order) { ?>
        <tr>
            <td><?php echo $order['order_id']; ?></td>
            <td><?php echo $order['customer_name']; ?></td>
            <td><?php echo $order['customer_contact']; ?></td>
            <td><?php echo number_format($order['total_amount'], 0, ',', '.'); ?> VND</td>
            <td>
                <button onclick="openEditOrderPopup(<?php echo $order['order_id']; ?>, '<?php echo addslashes($order['customer_name']); ?>', '<?php echo addslashes($order['customer_contact']); ?>', <?php echo $order['total_amount']; ?>)" class="edit-button">Sửa</button>
                <button onclick="openDeletePopup(<?php echo $order['order_id']; ?>)" class="delete-button">Xóa</button>
            </td>
        </tr>
    <?php } ?>
</table>
o	Bảng hiển thị đơn hàng:
	Mỗi đơn hàng được hiển thị trong một hàng (<tr>) của bảng, với các cột hiển thị order_id, customer_name, customer_contact, và total_amount.
	Các nút "Sửa" và "Xóa" được tạo cho mỗi đơn hàng. Các nút này sẽ gọi JavaScript để mở popup chỉnh sửa và xóa đơn hàng tương ứng.
•	Popup Thêm Đơn Hàng
<div class="overlay" id="addOrderOverlay" onclick="closeAddOrderPopup()"></div>
<div class="popup" id="addOrderPopup">
    <h2>Thêm đơn hàng mới</h2>
    <form action="add_order.php" method="post">
        Tên khách hàng: <input type="text" name="customer_name" required><br><br>
        Số điện thoại: <input type="text" name="customer_contact" required><br><br>
        Sản phẩm:
        <select name="product_id" required>
            <?php foreach ($products as $product) { ?>
                <option value="<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></option>
            <?php } ?>
        </select><br><br>
        Số lượng: <input type="number" name="quantity" required><br><br>
        Tổng số tiền: <input type="number" name="total_amount" required><br><br>
        <button type="submit">Thêm đơn hàng</button>
        <button type="button" onclick="closeAddOrderPopup()">Đóng</button>
    </form>
</div>
o	Popup Thêm Đơn Hàng:
	Khi người dùng nhấn nút "Thêm đơn hàng mới", popup này sẽ hiển thị.
	Form này yêu cầu thông tin về khách hàng, sản phẩm (dựa trên dữ liệu từ bảng SanPham), số lượng và tổng số tiền.
	Khi form được gửi, dữ liệu sẽ được gửi đến add_order.php để xử lý.
•	Popup Chỉnh Sửa Đơn Hàng
<div class="overlay" id="editOrderOverlay" onclick="closeEditOrderPopup()"></div>
<div class="popup" id="editOrderPopup">
    <h2>Sửa đơn hàng</h2>
    <form action="edit_order.php" method="post">
        <input type="hidden" name="order_id" id="edit_order_id">
        Tên khách hàng: <input type="text" name="customer_name" id="edit_customer_name" required><br><br>
        Số điện thoại: <input type="text" name="customer_contact" id="edit_customer_contact" required><br><br>
        Sản phẩm:
        <select name="product_id" id="edit_product_id" required>
            <?php foreach ($products as $product) { ?>
                <option value="<?php echo $product['product_id']; ?>"><?php echo $product['product_name']; ?></option>
            <?php } ?>
        </select><br><br>
        Số lượng: <input type="number" name="quantity" id="edit_quantity" required><br><br>
        Tổng số tiền: <input type="number" name="total_amount" id="edit_total_amount" required><br><br>
        <button type="submit">Cập nhật đơn hàng</button>
        <button type="button" onclick="closeEditOrderPopup()">Đóng</button>
    </form>
</div>
o	Popup Chỉnh Sửa Đơn Hàng:
	Popup này cho phép người dùng chỉnh sửa thông tin đơn hàng đã chọn.
	Các trường thông tin sẽ được điền tự động với dữ liệu của đơn hàng từ cơ sở dữ liệu. Form này sẽ gửi dữ liệu đến edit_order.php.
•	Popup Xóa Đơn Hàng
<div class="overlay" id="deleteOverlay" onclick="closeDeletePopup()"></div>
<div class="popup" id="deletePopup">
    <h2>Xác nhận xóa</h2>
    <p>Bạn có muốn xóa đơn hàng này</p>
    <form method="post" action="delete_order.php">
        <input type="hidden" name="delete_order_id" id="delete_order_id">
        <button type="submit">Xóa</button>
        <button type="button" onclick="closeDeletePopup()">Không</button>
    </form>
</div>
o	Popup Xóa Đơn Hàng:
	Khi người dùng muốn xóa một đơn hàng, popup này sẽ yêu cầu xác nhận.
	Một nút "Xóa" sẽ gửi yêu cầu xóa đơn hàng tới delete_order.php.
•	Kết thúc trang
<script src="js/order.js"></script>
<?php include 'footer1.php'; // Bao gồm footer ?>
o	Script JavaScript: Tệp order.js sẽ chứa mã JavaScript để điều khiển các popup (hiển thị và đóng popup).
o	Bao gồm Footer: Cuối cùng, tệp footer1.php sẽ được bao gồm để hiển thị phần chân trang của trang web.

2.2.4.	product_list.php

Đoạn mã dưới đây một trang phía quản trị viên quản lý sản phẩm với các chức năng quan trọng như thêm, sửa, và xóa sản phẩm, cùng với việc quản lý hình ảnh sản phẩm. Dưới đây là các phần quan trọng trong mã:
•	Kết nối và truy xuất dữ liệu từ cơ sở dữ liệu:
include '../includes/database.php';
$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();
o	Tạo kết nối với cơ sở dữ liệu qua database.php.
o	Truy vấn tất cả các sản phẩm từ bảng SanPham và lưu kết quả trong biến $products.
•	Form thêm và cập nhật sản phẩm:
o	Có hai biểu mẫu riêng biệt trong mã này: một cho việc thêm sản phẩm và một cho việc cập nhật.
o	Trong mỗi biểu mẫu, các thông tin như tên sản phẩm, giá, danh mục, và ảnh đều được cung cấp. Người dùng có thể tải lên ảnh mới hoặc thay đổi ảnh hiện tại khi cập nhật sản phẩm.
o	Khi thêm sản phẩm, ảnh tải lên sẽ được lưu với một tên duy nhất để tránh trùng lặp, và chỉ các định dạng hợp lệ như JPEG, PNG, và GIF được chấp nhận.
•	Xử lý khi gửi POST (Thêm và Cập nhật sản phẩm):
o	Thêm sản phẩm:
$stmt = $pdo->prepare("INSERT INTO SanPham (product_id,product_name, price, image_url, category_name) VALUES (?,?, ?, ?, ?)");
$stmt->execute([$product_id, $product_name, $price, $image_url, $category_name]);
	Khi người dùng điền đầy đủ thông tin và gửi biểu mẫu, một sản phẩm mới sẽ được thêm vào bảng SanPham.
o	Cập nhật sản phẩm:
$stmt = $pdo->prepare("UPDATE SanPham SET product_name = ?, price = ?, image_url = ?, category_name = ? WHERE product_id = ?");
$stmt->execute([$product_name, $price, $image_url, $category_name, $product_id]);
	Nếu người dùng sửa thông tin sản phẩm và gửi biểu mẫu, thông tin sản phẩm được cập nhật vào bảng SanPham.
•	Xóa sản phẩm:
if (isset($_POST['delete_product_id'])) {
    $product_id = $_POST['delete_product_id'];
    $query = "SELECT COUNT(*) FROM donhang WHERE product_id = :product_id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['product_id' => $product_id]);
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "Không thể xóa sản phẩm vì có đơn hàng đang tham chiếu.";
    } else {
        $deleteQuery = "DELETE FROM sanpham WHERE product_id = :product_id";
        $deleteStmt = $pdo->prepare($deleteQuery);
        $deleteStmt->execute(['product_id' => $product_id]);
        echo "Sản phẩm đã được xóa thành công.";
    }
}
o	Khi xóa, mã sẽ kiểm tra nếu sản phẩm này có liên kết với các đơn hàng không. Nếu có, sản phẩm sẽ không thể xóa. Nếu không, sản phẩm sẽ bị xóa khỏi bảng SanPham.
•	Giao diện hiển thị sản phẩm:
o	Phần hiển thị danh sách sản phẩm sử dụng bảng (<table>) để liệt kê các sản phẩm cùng các nút hành động (sửa và xóa).
o	Các nút này gọi các hàm JavaScript (openPopup, openDeletePopup) để mở các cửa sổ popup.
•	Các popup thêm, sửa và xóa sản phẩm:
o	Popup sửa sản phẩm cho phép người dùng chỉnh sửa thông tin sản phẩm và tải lên ảnh mới.
o	Popup xóa yêu cầu xác nhận trước khi xóa sản phẩm.
o	Popup thêm sản phẩm chứa các trường nhập liệu để người dùng thêm sản phẩm mới vào hệ thống.
•	JavaScript quản lý các popup:
o	Tệp product.js (được nhúng trong <script src="js/product.js"></script>) quản lý việc hiển thị và đóng các popup.
•	Thông báo người dùng:
o	Khi thêm, cập nhật hoặc xóa sản phẩm, người dùng sẽ nhận được thông báo xác nhận từ hệ thống.
2.2.6.	user_list.php

Tệp tin này là một trang quản lý danh sách người dùng (quản trị viên) trong một hệ thống web. Sau đây là giải thích các phần quan trọng:
•	Kết nối và Lấy Dữ Liệu từ Cơ Sở Dữ Liệu:

include '../includes/database.php';
o	Dòng này bao gồm tệp database.php, giúp kết nối đến cơ sở dữ liệu. Biến $pdo trong file database.php được sử dụng để thực hiện các truy vấn.

$stmt = $pdo->query("SELECT * FROM User");
$users = $stmt->fetchAll();
o	Câu lệnh SQL SELECT * FROM User lấy tất cả thông tin từ bảng User.
o	Hàm $stmt->fetchAll() lưu dữ liệu trả về vào mảng $users, chứa danh sách các quản trị viên để hiển thị trên trang.
•	Hiển Thị Dữ Liệu Người Dùng:

<table>
    ...
    <?php foreach ($users as $user) { ?>
    <tr>
        <td><?php echo $user['user_id']; ?></td>
        <td><?php echo $user['username']; ?></td>
        <td><?php echo $user['email']; ?></td>
        <td><?php echo htmlspecialchars($user['password']); ?></td> <!-- Hiển thị mật khẩu mã hóa -->
        ...
    </tr>
    <?php } ?>
</table>
o	Sử dụng vòng lặp foreach để duyệt qua từng người dùng trong $users và hiển thị thông tin: user_id, username, email, và mật khẩu (đã mã hóa) trong một bảng HTML.
o	Hàm htmlspecialchars bảo vệ chống lại mã độc khi hiển thị dữ liệu mật khẩu (dù thực tế không nên hiển thị mật khẩu mã hóa).
•	Các Nút Hành Động (Sửa, Xóa) và Popup Thêm Người Dùng:
<button onclick="openEditPopup(<?php echo $user['user_id']; ?>, '<?php echo $user['username']; ?>', '<?php echo $user['email']; ?>')" class="edit-button">Sửa</button>
<button onclick="openDeletePopup(<?php echo $user['user_id']; ?>)" class="delete-button">Xóa</button>
o	Các nút "Sửa" và "Xóa" được liên kết với các hàm JavaScript openEditPopup và openDeletePopup, mở các popup tương ứng.
o	Thông tin người dùng (user_id, username, email) được truyền vào các hàm này để xử lý trong JavaScript.
•	Popup Thêm Người Dùng Mới:
<div class="popup" id="addPopup">
    <form action="add_user.php" method="post">
        ...
    </form>
</div>
o	Popup này chứa biểu mẫu để thêm người dùng mới. Dữ liệu từ biểu mẫu sẽ được gửi đến tệp add_user.php để thêm người dùng vào cơ sở dữ liệu.
•	Popup Chỉnh Sửa Người Dùng:
<div class="popup" id="editPopup">
    <form action="edit_user.php" method="post">
        <input type="hidden" name="user_id" id="edit_user_id">
        ...
    </form>
</div>
o	Popup này chứa biểu mẫu để chỉnh sửa thông tin người dùng. Giá trị user_id được lưu trong một trường ẩn (<input type="hidden">) để xác định người dùng cần chỉnh sửa.
o	Dữ liệu sẽ được gửi tới edit_user.php để cập nhật thông tin trong cơ sở dữ liệu.
•	Popup Xác Nhận Xóa Người Dùng:
<div class="popup" id="deletePopup">
    <form method="post" action="delete_user.php">
        <input type="hidden" name="user_id" id="delete_user_id">
        ...
    </form>
</div>
o	Popup này hiện lên để xác nhận xóa người dùng. Khi người dùng xác nhận, user_id của người dùng cần xóa sẽ được gửi tới delete_user.php để thực hiện thao tác xóa trong cơ sở dữ liệu.
•	JavaScript Xử Lý Popup:
<script src="js/user.js"></script>
o	Tệp user.js chứa mã JavaScript để điều khiển các popup thêm, sửa, và xóa người dùng khi nhấn vào các nút tương ứng.
•	Bao Gồm Header và Footer:
include 'header1.php';
include 'footer1.php';
o	header1.php và footer1.php bao gồm phần đầu và cuối của trang web, có thể chứa menu điều hướng và thông tin khác để đồng bộ trên tất cả các trang.
Tóm lại, mã này tạo một giao diện quản lý người dùng với các chức năng xem, thêm, sửa, và xóa thông qua các biểu mẫu popup và các truy vấn SQL cơ bản.

2.2.7.	add_product.php
Đoạn mã PHP này thực hiện chức năng thêm sản phẩm mới vào cơ sở dữ liệu, với chi tiết giải thích từng phần như sau:
•	Kết nối đến Cơ Sở Dữ Liệu:
include '../includes/database.php';
o	Đoạn mã này bao gồm tệp database.php, giúp kết nối đến cơ sở dữ liệu. Tệp này đảm bảo rằng biến $pdo đã được khởi tạo đúng cách để thực hiện các thao tác truy vấn với cơ sở dữ liệu.
•	Xử lý Yêu Cầu POST:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = isset($_POST['product_name']) ? trim($_POST['product_name']) : null;
    $price = isset($_POST['price']) ? trim($_POST['price']) : null;
    $category_name = isset($_POST['category_name']) ? trim($_POST['category_name']) : null;
o	Kiểm tra nếu yêu cầu từ biểu mẫu gửi đến là POST. Điều này xác định rằng trang chỉ xử lý khi biểu mẫu được gửi.
o	Các biến $product_name, $price, và $category_name lấy giá trị từ biểu mẫu thông qua $_POST. Hàm trim() giúp loại bỏ khoảng trắng thừa, và isset() kiểm tra nếu giá trị tồn tại.
•	Xử lý Tệp Ảnh Tải Lên (Nếu Có):
$image_url = null;
if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == 0) {
    ...
    $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
    if (in_array($image_type, $allowed_types)) {
        ...
    } else {
        echo "Chỉ chấp nhận định dạng ảnh JPG, PNG, GIF.";
        exit();
    }
}
o	Biến $image_url được khởi tạo với giá trị null, và sẽ chỉ cập nhật nếu có tệp ảnh hợp lệ.
o	Sử dụng $_FILES['image_url'] để kiểm tra nếu ảnh đã được tải lên mà không có lỗi (error == 0).
o	Biến $allowed_types chứa các định dạng ảnh hợp lệ. in_array() đảm bảo rằng loại tệp ảnh nằm trong các định dạng được chấp nhận.
o	Nếu không phải định dạng hợp lệ, hiển thị thông báo lỗi và kết thúc chương trình bằng exit().
•	Đổi Tên và Lưu Ảnh Vào Thư Mục images:
$image_name = uniqid('product_', true) . '.' . strtolower($image_extension);
$image_path = '../images/' . $image_name;

if (!is_dir('../images/')) {
    mkdir('../images/', 0755, true);
}

if (move_uploaded_file($image_tmp, $image_path)) {
    $image_url = $image_name;
} else {
    echo "Không thể tải ảnh lên. Vui lòng thử lại.";
    exit();
}
o	Sử dụng uniqid() để tạo tên duy nhất cho ảnh, tránh trùng lặp với ảnh khác. pathinfo() lấy phần mở rộng tệp để giữ đúng định dạng.
o	Kiểm tra và tạo thư mục images nếu chưa tồn tại.
o	move_uploaded_file() di chuyển ảnh từ thư mục tạm sang thư mục images để sử dụng lâu dài. Nếu di chuyển thành công, biến $image_url sẽ lưu tên ảnh để thêm vào cơ sở dữ liệu.
•	Kiểm tra Dữ Liệu Trước Khi Thêm Vào Cơ Sở Dữ Liệu:
if ($product_name && $price && $category_name) {
    try {
        $stmt = $pdo->prepare("INSERT INTO SanPham (product_name, price, image_url, category_name) VALUES (?, ?, ?, ?)");
        $stmt->execute([$product_name, $price, $image_url, $category_name]);
        header("Location: product_list.php");
        exit();
    } catch (PDOException $e) {
        echo "Lỗi khi thêm sản phẩm: " . $e->getMessage();
        exit();
    }
} else {
    echo "Vui lòng nhập đầy đủ thông tin sản phẩm.";
    exit();
}
o	Kiểm tra nếu các trường $product_name, $price, và $category_name không rỗng trước khi thực hiện thêm vào cơ sở dữ liệu.
o	Sử dụng câu lệnh INSERT INTO để thêm sản phẩm mới vào bảng SanPham. Các tham số được truyền dưới dạng mảng để tránh SQL injection.
o	header("Location: product_list.php") chuyển hướng người dùng đến trang danh sách sản phẩm sau khi thêm thành công.
o	Nếu có lỗi trong quá trình thực hiện truy vấn, catch (PDOException $e) sẽ hiển thị thông báo lỗi.
Tệp add_user.php , add_order.php có cấu trúc tương tự như tệp add_product.php ,ngoại trừ đoạn lấy ảnh từ máy tính
2.2.8.	add_user.php
Đoạn mã này là một phần của chức năng thêm người dùng mới vào cơ sở dữ liệu. Các phần quan trọng được giải thích chi tiết như sau:
•	Kết nối cơ sở dữ liệu
include '../includes/database.php';
o	Đoạn này bao gồm file database.php, file này chứa các thiết lập kết nối đến cơ sở dữ liệu bằng PDO (PHP Data Objects), giúp thực hiện các truy vấn an toàn và hiệu quả.
•	Lấy dữ liệu từ biểu mẫu
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Mã hóa mật khẩu
$email = $_POST['email'];
o	Lấy dữ liệu từ biểu mẫu POST, bao gồm username, password, và email.
o	Mã hóa mật khẩu bằng hàm password_hash với PASSWORD_DEFAULT, đảm bảo bảo mật mật khẩu trong cơ sở dữ liệu.
•	Mã hóa mật khẩu
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
o	Thực hiện mã hóa mật khẩu một lần nữa (dòng này không thực sự cần thiết vì password đã được mã hóa ở dòng trước đó). Câu lệnh này có thể được bỏ qua, nhưng nếu xuất hiện trong code thực tế, nó sẽ thực hiện mã hóa mật khẩu thêm một lần nữa.
•	Chèn người dùng vào cơ sở dữ liệu
$sql = "INSERT INTO User (username, password, email) VALUES (:username, :password, :email)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $username,
    ':password' => $hashed_password,
    ':email' => $email
]);
o	Tạo truy vấn INSERT để thêm thông tin người dùng (username, password, email) vào bảng User.
o	Sử dụng prepare để tạo một câu lệnh đã chuẩn bị (prepared statement), giúp chống lại lỗ hổng SQL Injection.
o	Dùng execute với mảng giá trị tương ứng để thực hiện chèn dữ liệu an toàn vào cơ sở dữ liệu.
•	Chuyển hướng sau khi thêm người dùng
header("Location: user_list.php"); // Điều hướng trở lại danh sách người dùng
exit;
o	Sau khi thực hiện thêm thành công, hàm header chuyển hướng người dùng đến trang user_list.php, nơi hiển thị danh sách người dùng.
o	exit đảm bảo ngăn mã phía dưới tiếp tục thực thi, đảm bảo rằng chuyển hướng sẽ được thực hiện ngay lập tức.

2.2.9.	add_order.php

Đoạn mã này thực hiện chức năng thêm đơn hàng mới vào hệ thống quản lý đơn hàng. Dưới đây là giải thích chi tiết từng phần quan trọng:
•	Kết nối cơ sở dữ liệu
include '../includes/database.php';
o	Mục đích:
	Nhúng tệp database.php để thiết lập kết nối với cơ sở dữ liệu thông qua PDO.
	Đây là bước khởi đầu quan trọng để thực hiện các truy vấn liên quan đến cơ sở dữ liệu.
•	Truy vấn danh sách sản phẩm
$stmt = $pdo->query("SELECT * FROM SanPham");
$products = $stmt->fetchAll();
o	Mục đích:
	Truy vấn tất cả sản phẩm từ bảng SanPham.
	Kết quả được lưu trong biến $products dưới dạng mảng (sử dụng fetchAll()).
	Dữ liệu này có thể được sử dụng để hiển thị danh sách sản phẩm trong dropdown trên giao diện.
•	Kiểm tra phương thức HTTP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    ...
}
o	Mục đích:
	Kiểm tra nếu người dùng gửi biểu mẫu (POST method). Chỉ khi biểu mẫu được gửi, đoạn mã bên trong if mới được thực thi.
•	Lấy thông tin từ biểu mẫu
$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
$customer_name = $_POST['customer_name'];
$customer_contact = $_POST['customer_contact'];
o	Mục đích:
	Lấy dữ liệu từ biểu mẫu:
	product_id: ID sản phẩm.
	quantity: Số lượng sản phẩm được đặt.
	customer_name: Tên khách hàng.
	customer_contact: Thông tin liên lạc của khách hàng.
________________________________________
•	Lấy giá sản phẩm
$stmt = $pdo->prepare("SELECT price FROM SanPham WHERE product_id = ?");
$stmt->execute([$product_id]);
$product = $stmt->fetch();
o	Mục đích:
	Sử dụng product_id từ biểu mẫu để tìm giá của sản phẩm trong bảng SanPham.
	Nếu sản phẩm không tồn tại, chương trình sẽ kết thúc với thông báo lỗi.
•	Tính tổng tiền
$price = $product['price']; // Giá của sản phẩm
$total_amount = $quantity * $price; // Tổng tiền
o	Mục đích:
	Lấy giá sản phẩm từ kết quả truy vấn.
	Tính tổng tiền dựa trên số lượng và giá (Số lượng * Giá).
•	Chèn đơn hàng vào bảng DonHang
$order_date = date('Y-m-d H:i:s'); // Ngày giờ hiện tại
$stmt = $pdo->prepare("INSERT INTO DonHang (product_id, quantity, customer_name, customer_contact, total_amount, order_date) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->execute([$product_id, $quantity, $customer_name, $customer_contact, $total_amount, $order_date]);
o	Mục đích:
	Tạo một bản ghi mới trong bảng DonHang với các thông tin:
	ID sản phẩm.
	Số lượng.
	Tên khách hàng.
	Thông tin liên lạc khách hàng.
	Tổng tiền.
	Ngày giờ đặt hàng.
	Sử dụng lệnh prepare để tránh SQL Injection.
________________________________________
•	Chuyển hướng sau khi đặt hàng thành công
header("Location: order_list.php");
o	Mục đích:
	Sau khi thêm đơn hàng thành công, người dùng được chuyển hướng đến danh sách đơn hàng (order_list.php).

2.2.10.	edit_product.php
Đoạn code này là một phần xử lý cập nhật sản phẩm trong một ứng dụng web PHP. Các phần quan trọng được giải thích chi tiết như sau:
•	Kiểm tra phương thức HTTP
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
o	Kiểm tra xem yêu cầu HTTP gửi đến là phương thức POST. Điều này đảm bảo chỉ xử lý khi dữ liệu được gửi qua biểu mẫu.
•	Lấy thông tin từ biểu mẫu
$product_id = isset($_POST['product_id']) ? $_POST['product_id'] : null;
$product_name = isset($_POST['product_name']) ? trim($_POST['product_name']) : null;
$price = isset($_POST['price']) ? trim($_POST['price']) : null;
$category_name = isset($_POST['category_name']) ? trim($_POST['category_name']) : null;
o	Lấy dữ liệu từ các trường của biểu mẫu POST.
o	Sử dụng isset để kiểm tra nếu các trường này tồn tại.
o	Hàm trim loại bỏ khoảng trắng thừa ở đầu và cuối chuỗi, đảm bảo dữ liệu được xử lý sạch.
•	Xử lý file ảnh tải lên
if (isset($_FILES['image_url']) && $_FILES['image_url']['error'] == 0) {
o	Kiểm tra xem người dùng có tải file ảnh lên hay không, và đảm bảo không có lỗi trong quá trình tải file (error == 0).
•	Kiểm tra định dạng ảnh
$allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
if (in_array($image_type, $allowed_types)) {
o	Chỉ chấp nhận các định dạng ảnh hợp lệ: JPEG, PNG, GIF.
o	Đảm bảo hệ thống không xử lý các file không phải là ảnh.
•	Lưu ảnh vào thư mục
$image_name = uniqid('product_', true) . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
$image_path = '../images/' . $image_name;
move_uploaded_file($image_tmp, $image_path);
$image_url = $image_name;
o	Đổi tên file: Dùng uniqid để tạo tên duy nhất, tránh việc ghi đè file ảnh trùng tên.
o	Lưu file: move_uploaded_file di chuyển file từ thư mục tạm sang thư mục lưu trữ cố định (../images/).
•	Cập nhật dữ liệu sản phẩm
$stmt = $pdo->prepare("UPDATE SanPham SET product_name = ?, price = ?, image_url = ?, category_name = ? WHERE product_id = ?");
$stmt->execute([$product_name, $price, $image_url, $category_name, $product_id]);
o	Sử dụng Prepared Statement để đảm bảo an toàn trước các lỗ hổng SQL Injection.
o	Lệnh UPDATE cập nhật các trường:
	product_name: Tên sản phẩm.
	price: Giá sản phẩm.
	image_url: Đường dẫn ảnh.
	category_name: Tên danh mục.
	Điều kiện WHERE product_id = ? để xác định sản phẩm cần cập nhật.
•	Chuyển hướng sau khi xử lý
header("Location: product_list.php");
exit();
o	Sau khi cập nhật thành công, chuyển hướng người dùng đến trang danh sách sản phẩm (product_list.php) để tránh việc nạp lại trang và gửi lại biểu mẫu.

2.2.11.	edit_user.php
Đoạn mã này thực hiện chức năng cập nhật thông tin người dùng trong hệ thống quản lý người dùng. Dưới đây là giải thích chi tiết từng phần quan trọng:
•	Kết nối cơ sở dữ liệu

include '../includes/database.php';
o	Bao gồm tệp database.php để kết nối với cơ sở dữ liệu sử dụng PDO (PHP Data Objects). Điều này giúp các truy vấn cơ sở dữ liệu có thể thực hiện an toàn và hiệu quả.
•	Lấy dữ liệu từ biểu mẫu

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
o	Các dữ liệu cần thiết để cập nhật thông tin người dùng được lấy từ biểu mẫu đã gửi:
	user_id: ID của người dùng cần cập nhật.
	username: Tên người dùng mới hoặc hiện tại.
	email: Địa chỉ email mới hoặc hiện tại của người dùng.
•	Kiểm tra và xử lý thay đổi mật khẩu

if (!empty($_POST['password'])) {
o	Kiểm tra xem trường password có được điền hay không. Nếu người dùng nhập mật khẩu mới, thì đoạn mã bên trong khối if sẽ thực hiện cập nhật cả mật khẩu.
o	Ngược lại, nếu trường password rỗng, hệ thống chỉ cập nhật tên người dùng và email.
•	Cập nhật mật khẩu (nếu có)

$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
o	Lấy mật khẩu mới từ biểu mẫu và mã hóa nó bằng password_hash() với PASSWORD_DEFAULT để tăng cường bảo mật, giúp tránh việc lưu mật khẩu dạng văn bản gốc (plain text).

$sql = "UPDATE User SET username = :username, password = :password, email = :email WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $username,
    ':password' => $hashed_password,
    ':email' => $email,
    ':user_id' => $user_id
]);
o	Câu truy vấn SQL UPDATE được chuẩn bị để cập nhật thông tin username, password, và email trong bảng User với điều kiện user_id khớp với ID người dùng.
o	Sử dụng prepared statement với các placeholder (:username, :password, :email, :user_id) giúp bảo vệ chống lại SQL Injection và đảm bảo an toàn khi thực hiện truy vấn.
•	Cập nhật không bao gồm mật khẩu

} else {
    $sql = "UPDATE User SET username = :username, email = :email WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':user_id' => $user_id
    ]);
}
o	Trong trường hợp người dùng không muốn thay đổi mật khẩu, khối else chỉ cập nhật username và email.
o	Câu truy vấn SQL UPDATE bỏ qua trường password, và dữ liệu chỉ được cập nhật với thông tin tên và email mới.
•	Chuyển hướng sau khi cập nhật

header("Location: user_list.php");
exit;
o	Sau khi hoàn tất việc cập nhật, mã sẽ điều hướng người dùng về trang user_list.php (danh sách người dùng).
o	Mục đích: Đảm bảo người dùng thấy kết quả cập nhật và tránh việc nhấn F5 hoặc làm mới trang dẫn đến cập nhật lại lần nữa.

2.2.12.	edit_order.php
Đoạn mã này thực hiện chức năng cập nhật thông tin người dùng trong hệ thống quản lý người dùng. Dưới đây là giải thích chi tiết từng phần quan trọng:
•	Kết nối cơ sở dữ liệu

include '../includes/database.php';
o	Bao gồm tệp database.php để kết nối với cơ sở dữ liệu sử dụng PDO (PHP Data Objects). Điều này giúp các truy vấn cơ sở dữ liệu có thể thực hiện an toàn và hiệu quả.
•	Lấy dữ liệu từ biểu mẫu

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
o	Các dữ liệu cần thiết để cập nhật thông tin người dùng được lấy từ biểu mẫu đã gửi:
	user_id: ID của người dùng cần cập nhật.
	username: Tên người dùng mới hoặc hiện tại.
	email: Địa chỉ email mới hoặc hiện tại của người dùng.
•	Kiểm tra và xử lý thay đổi mật khẩu

if (!empty($_POST['password'])) {
o	Kiểm tra xem trường password có được điền hay không. Nếu người dùng nhập mật khẩu mới, thì đoạn mã bên trong khối if sẽ thực hiện cập nhật cả mật khẩu.
o	Ngược lại, nếu trường password rỗng, hệ thống chỉ cập nhật tên người dùng và email.
•	Cập nhật mật khẩu (nếu có)

$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
o	Lấy mật khẩu mới từ biểu mẫu và mã hóa nó bằng password_hash() với PASSWORD_DEFAULT để tăng cường bảo mật, giúp tránh việc lưu mật khẩu dạng văn bản gốc (plain text).

$sql = "UPDATE User SET username = :username, password = :password, email = :email WHERE user_id = :user_id";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    ':username' => $username,
    ':password' => $hashed_password,
    ':email' => $email,
    ':user_id' => $user_id
]);
o	Câu truy vấn SQL UPDATE được chuẩn bị để cập nhật thông tin username, password, và email trong bảng User với điều kiện user_id khớp với ID người dùng.
o	Sử dụng prepared statement với các placeholder (:username, :password, :email, :user_id) giúp bảo vệ chống lại SQL Injection và đảm bảo an toàn khi thực hiện truy vấn.
•	Cập nhật không bao gồm mật khẩu

} else {
    $sql = "UPDATE User SET username = :username, email = :email WHERE user_id = :user_id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':username' => $username,
        ':email' => $email,
        ':user_id' => $user_id
    ]);
}
o	Trong trường hợp người dùng không muốn thay đổi mật khẩu, khối else chỉ cập nhật username và email.
o	Câu truy vấn SQL UPDATE bỏ qua trường password, và dữ liệu chỉ được cập nhật với thông tin tên và email mới.
•	Chuyển hướng sau khi cập nhật

header("Location: user_list.php");
exit;
o	Sau khi hoàn tất việc cập nhật, mã sẽ điều hướng người dùng về trang user_list.php (danh sách người dùng).
o	Mục đích: Đảm bảo người dùng thấy kết quả cập nhật và tránh việc nhấn F5 hoặc làm mới trang dẫn đến cập nhật lại lần nữa.

2.2.13.	delete_order.php

Đoạn mã này xử lý yêu cầu xóa đơn hàng khỏi cơ sở dữ liệu trong hệ thống quản lý đơn hàng. Dưới đây là các phần quan trọng trong mã:
•	Kết nối cơ sở dữ liệu

include '../includes/database.php';
o	Bao gồm tệp database.php để kết nối với cơ sở dữ liệu, cho phép các truy vấn được thực hiện thông qua đối tượng PDO ($pdo).
•	Kiểm tra yêu cầu POST và xác thực hành động xóa

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_order_id'])) {
    $order_id = $_POST['delete_order_id'];
o	Kiểm tra xem yêu cầu có phải là phương thức POST và có chứa delete_order_id hay không. Điều này đảm bảo mã chỉ xử lý khi có yêu cầu xóa từ biểu mẫu (tránh thao tác xóa không mong muốn khi tải trang).
o	Lấy order_id từ $_POST['delete_order_id'], đại diện cho ID của đơn hàng cần xóa.
•	Xóa đơn hàng

$stmt = $pdo->prepare("DELETE FROM DonHang WHERE order_id = ?");
$stmt->execute([$order_id]);
o	Câu lệnh SQL DELETE được chuẩn bị để xóa đơn hàng từ bảng DonHang với điều kiện order_id phải khớp với giá trị truyền vào.
o	Sử dụng prepare và execute với mảng giá trị $order_id giúp bảo vệ chống lại SQL Injection, đảm bảo tính an toàn của ứng dụng.
•	Chuyển hướng sau khi xóa

header("Location: order_list.php");
exit();
o	Sau khi xóa đơn hàng, mã sẽ chuyển hướng người dùng về trang order_list.php (danh sách đơn hàng). Điều này giúp hiển thị kết quả mới và ngăn người dùng lặp lại thao tác xóa khi làm mới trang.
•	Trường hợp không có hành động xóa

} else {
    header("Location: order_list.php");
    exit();
}
o	Nếu điều kiện if không thỏa mãn (yêu cầu không phải POST hoặc không có delete_order_id), mã sẽ ngay lập tức chuyển hướng về order_list.php.
o	Mục đích: Giảm thiểu lỗi hoặc hành vi không mong muốn khi truy cập trang xóa đơn hàng mà không thực hiện yêu cầu xóa.

2.2.14.	delete_product.php

Đoạn mã này thực hiện xóa sản phẩm khỏi cơ sở dữ liệu trong hệ thống quản lý sản phẩm. Các phần quan trọng trong mã bao gồm:
•	Kết nối cơ sở dữ liệu

include '../includes/database.php';
o	Bao gồm tệp database.php để thiết lập kết nối cơ sở dữ liệu, cho phép sử dụng đối tượng PDO ($pdo) cho các truy vấn.
•	Kiểm tra yêu cầu POST và xác thực hành động xóa

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_product_id'])) {
    $product_id = $_POST['delete_product_id'];
o	Kiểm tra xem yêu cầu có phải là phương thức POST và có chứa delete_product_id không. Điều này đảm bảo mã chỉ thực hiện hành động xóa khi có yêu cầu từ một biểu mẫu POST (tránh xóa không mong muốn khi chỉ tải trang).
o	Lấy product_id từ $_POST['delete_product_id'], đại diện cho ID của sản phẩm cần xóa.
•	Chuẩn bị câu lệnh xóa sản phẩm

$stmt = $pdo->prepare("DELETE FROM SanPham WHERE product_id = ?");
$stmt->execute([$product_id]);
o	Sử dụng câu lệnh SQL DELETE để xóa sản phẩm trong bảng SanPham với điều kiện product_id khớp với giá trị cung cấp.
o	Câu lệnh sử dụng prepare và execute với tham số $product_id giúp bảo vệ chống lại SQL Injection, đảm bảo an toàn khi xử lý dữ liệu đầu vào từ người dùng.
•	Chuyển hướng sau khi xóa

header("Location: product_list.php");
exit();
•	Sau khi xóa sản phẩm, mã chuyển hướng người dùng về product_list.php (danh sách sản phẩm), giúp hiển thị kết quả cập nhật sau khi xóa và ngăn người dùng lặp lại hành động xóa khi làm mới trang.

2.2.15.	delete_user.php

Đoạn mã này xử lý việc xóa người dùng trong hệ thống quản lý người dùng. Dưới đây là giải thích các phần quan trọng:
•	Kết nối cơ sở dữ liệu

include '../includes/database.php';
o	Đoạn mã này bao gồm tệp database.php, chứa mã để thiết lập kết nối cơ sở dữ liệu, giúp sử dụng đối tượng PDO ($pdo) để thực hiện các truy vấn SQL.
•	Kiểm tra yêu cầu POST và kiểm tra user_id

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
o	Kiểm tra xem yêu cầu có phải là POST và có chứa user_id hay không. Điều này đảm bảo mã chỉ thực hiện hành động xóa khi có một yêu cầu POST hợp lệ từ một biểu mẫu có chứa user_id.
o	Biến $user_id được lấy từ $_POST['user_id'] và đại diện cho ID của người dùng cần xóa.
•	Chuẩn bị và thực thi câu lệnh xóa

$stmt = $pdo->prepare("DELETE FROM User WHERE user_id = ?");
$stmt->execute([$user_id]);
o	Sử dụng câu lệnh SQL DELETE để xóa người dùng trong bảng User với điều kiện user_id trùng với giá trị cung cấp.
o	Câu lệnh sử dụng prepare và execute với tham số $user_id giúp bảo vệ chống SQL Injection, đảm bảo an toàn khi xử lý dữ liệu từ người dùng.
•	Chuyển hướng sau khi xóa

header("Location: user_list.php");
exit();
o	Sau khi xóa, mã chuyển hướng người dùng về user_list.php để hiển thị danh sách người dùng đã được cập nhật.
o	exit(); đảm bảo mã dừng ngay sau khi chuyển hướng, ngăn việc thực thi các mã khác không cần thiết.
•	Chuyển hướng nếu không có user_id
else {
    header("Location: user_list.php");
    exit();
}
o	Nếu yêu cầu không chứa user_id, mã sẽ chuyển hướng về user_list.php mà không thực hiện xóa, đảm bảo chỉ thực hiện khi có user_id.

2.2.16.	order.js

Đoạn mã JavaScript này định nghĩa các hàm để quản lý hiển thị và ẩn các popup trong giao diện quản trị đơn hàng. Dưới đây là giải thích chi tiết cho các phần quan trọng:
•	Các hàm hiển thị và ẩn popup chỉnh sửa đơn hàng
openEditPopup
function openEditPopup(orderId, customerName, customerContact, totalAmount) {
    document.getElementById("editOverlay").style.display = "block";
    document.getElementById("editPopup").style.display = "block";
    document.getElementById("edit_order_id").value = orderId;
    document.getElementById("edit_customer_name").value = customerName;
    document.getElementById("edit_customer_contact").value = customerContact;
    document.getElementById("edit_total_amount").value = totalAmount;
}
o	Hiển thị lớp phủ (editOverlay) và popup (editPopup) chỉnh sửa đơn hàng.
o	Thiết lập giá trị ban đầu của các trường trong popup (edit_order_id, edit_customer_name, edit_customer_contact, edit_total_amount) dựa trên tham số truyền vào (thông tin đơn hàng cần chỉnh sửa).
closeEditPopup
function closeEditPopup() {
    document.getElementById("editOverlay").style.display = "none";
    document.getElementById("editPopup").style.display = "none";
}
o	Ẩn lớp phủ (editOverlay) và popup (editPopup) sau khi hoàn tất hoặc hủy chỉnh sửa.
•	Các hàm hiển thị và ẩn popup xóa đơn hàng
openDeletePopup
function openDeletePopup(orderId) {
    document.getElementById("deleteOverlay").style.display = "block";
    document.getElementById("deletePopup").style.display = "block";
    document.getElementById("delete_order_id").value = orderId;
}
o	Hiển thị lớp phủ (deleteOverlay) và popup (deletePopup) xác nhận xóa đơn hàng.
o	Gán orderId vào trường ẩn (delete_order_id) để sử dụng khi thực hiện xóa.
closeDeletePopup
function closeDeletePopup() {
    document.getElementById("deleteOverlay").style.display = "none";
    document.getElementById("deletePopup").style.display = "none";
}
o	Ẩn lớp phủ (deleteOverlay) và popup (deletePopup) sau khi hoàn tất hoặc hủy thao tác xóa.
•	Các hàm hiển thị và ẩn popup thêm đơn hàng
openAddOrderPopup
function openAddOrderPopup() {
    document.getElementById('addOrderOverlay').style.display = 'block';
    document.getElementById('addOrderPopup').style.display = 'block';
}
o	Hiển thị lớp phủ (addOrderOverlay) và popup (addOrderPopup) để nhập thông tin thêm đơn hàng mới.
closeAddOrderPopup
function closeAddOrderPopup() {
    document.getElementById('addOrderOverlay').style.display = 'none';
    document.getElementById('addOrderPopup').style.display = 'none';
}
o	Ẩn lớp phủ (addOrderOverlay) và popup (addOrderPopup) sau khi hoàn tất hoặc hủy thao tác thêm đơn hàng.

2.2.17.	product.js

Đoạn mã này chứa các hàm JavaScript xử lý giao diện popup trong một ứng dụng quản lý sản phẩm. Dưới đây là giải thích chi tiết các phần quan trọng:
•	Hàm mở và đóng popup chỉnh sửa sản phẩm
Hàm mở popup chỉnh sửa
function openEditPopup(id, name, price, imageUrl, categoryName) {
    document.getElementById('edit_product_id').value = id;
    document.getElementById('edit_product_name').value = name;
    document.getElementById('edit_price').value = price;
    document.getElementById('edit_category_name').value = categoryName;
    
    if (imageUrl) {
        document.getElementById('edit_image_url_text').textContent = imageUrl;
    } else {
        document.getElementById('edit_image_url_text').textContent = 'Chưa chọn ảnh';
    }
    
    document.getElementById('editPopup').style.display = 'block';
    document.getElementById('editOverlay').style.display = 'block';
}
o	Mục đích: Hiển thị popup chỉnh sửa sản phẩm và điền sẵn thông tin của sản phẩm được chọn.
o	Chi tiết:
	Gán giá trị của sản phẩm vào các trường nhập liệu như edit_product_id, edit_product_name, edit_price, edit_category_name.
	Hiển thị tên ảnh (nếu có) trong phần thông tin ảnh; nếu không có, hiển thị Chưa chọn ảnh.
	Hiển thị popup (editPopup) và lớp phủ (editOverlay).
Hàm đóng popup chỉnh sửa
function closeEditPopup() {
    document.getElementById('editPopup').style.display = 'none';
    document.getElementById('editOverlay').style.display = 'none';
    document.getElementById('edit_image_url').value = ''; // Xóa giá trị trường file
    document.getElementById('edit_image_url_text').textContent = 'Chưa chọn ảnh'; // Reset lại text
}
o	Mục đích: Đóng popup chỉnh sửa và reset các trường liên quan đến ảnh.
•	Hàm mở và đóng popup thêm sản phẩm
Hàm mở popup thêm sản phẩm
function openAddPopup() {
    document.getElementById('addPopup').style.display = 'block';
    document.getElementById('addOverlay').style.display = 'block';
}
o	Mục đích: Hiển thị giao diện thêm sản phẩm mới.
o	Chi tiết: Hiển thị popup (addPopup) và lớp phủ (addOverlay).
Hàm đóng popup thêm sản phẩm
function closeAddPopup() {
    document.getElementById('addPopup').style.display = 'none';
    document.getElementById('addOverlay').style.display = 'none';
    document.getElementById('add_image_url').value = ''; // Xóa giá trị file
    document.getElementById('add_image_url_text').textContent = 'Chưa chọn ảnh'; // Reset text
}
o	Mục đích: Đóng popup thêm sản phẩm và reset trường liên quan đến ảnh.
•	Hàm mở và đóng popup xóa sản phẩm
Hàm mở popup xóa
function openDeletePopup(productId) {
    document.getElementById('delete_product_id').value = productId;
    document.getElementById('deleteOverlay').style.display = 'block';
    document.getElementById('deletePopup').style.display = 'block';
}
o	Mục đích: Hiển thị giao diện xác nhận xóa sản phẩm.
o	Chi tiết: Gán productId của sản phẩm cần xóa vào input ẩn để xử lý khi gửi yêu cầu xóa.
Hàm đóng popup xóa
function closeDeletePopup() {
    document.getElementById('deleteOverlay').style.display = 'none';
    document.getElementById('deletePopup').style.display = 'none';
}
o	Mục đích: Đóng popup xác nhận xóa.
•	Hàm xử lý ảnh trong popup
Xem trước ảnh
function previewImage() {
    var file = document.getElementById('product_image').files[0];
    var reader = new FileReader();

    reader.onloadend = function() {
        document.getElementById('image_preview').src = reader.result;
        document.getElementById('image_preview').style.display = 'block';
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        document.getElementById('image_preview').src = "";
        document.getElementById('image_preview').style.display = 'none';
    }
}
o	Mục đích: Hiển thị ảnh xem trước khi người dùng chọn ảnh.
o	Chi tiết:
	Sử dụng FileReader để đọc file ảnh và hiển thị ảnh trong phần tử image_preview.
	Ẩn phần xem trước nếu không có file được chọn.
•	Hàm cập nhật tên file
document.getElementById('edit_image_url').addEventListener('change', function(event) {
    const fileName = event.target.files[0] ? event.target.files[0].name : 'Chưa chọn ảnh';
    document.getElementById('edit_image_url_text').textContent = fileName;
});
o	Mục đích: Cập nhật tên file khi người dùng chọn file trong popup chỉnh sửa.
o	Chi tiết:
	Lấy tên file từ input file và hiển thị ở vị trí edit_image_url_text.

2.2.18.	user.js

Đoạn mã này bao gồm các hàm JavaScript được sử dụng để quản lý việc hiển thị và ẩn popup cho các chức năng thêm, chỉnh sửa và xóa người dùng. Dưới đây là giải thích các phần quan trọng:
•	Hàm mở popup thêm người dùng: openAddPopup
function openAddPopup() {
    document.getElementById('addOverlay').style.display = 'block';
    document.getElementById('addPopup').style.display = 'block';
}
o	Ý nghĩa: Hiển thị popup để thêm người dùng.
o	Chi tiết:
	addOverlay: Là lớp mờ (overlay) xuất hiện phía sau popup, tạo hiệu ứng làm nổi bật popup.
	addPopup: Là popup hiển thị giao diện nhập thông tin người dùng mới.
	style.display = 'block': Thay đổi thuộc tính CSS display của các phần tử này thành 'block', khiến chúng xuất hiện.
•	Hàm đóng popup thêm người dùng: closeAddPopup
function closeAddPopup() {
    document.getElementById('addOverlay').style.display = 'none';
    document.getElementById('addPopup').style.display = 'none';
}
o	Ý nghĩa: Ẩn popup thêm người dùng và overlay.
o	Chi tiết:
	style.display = 'none': Thay đổi thuộc tính CSS của các phần tử này thành 'none', khiến chúng ẩn đi.
•	Hàm mở popup chỉnh sửa người dùng: openEditPopup
function openEditPopup(userId, username, email) {
    document.getElementById('edit_user_id').value = userId;
    document.getElementById('edit_username').value = username;
    document.getElementById('edit_email').value = email;
    document.getElementById('editOverlay').style.display = 'block';
    document.getElementById('editPopup').style.display = 'block';
}
o	Ý nghĩa: Hiển thị popup chỉnh sửa người dùng với thông tin cụ thể.
o	Chi tiết:
	Gán giá trị vào các input:
	edit_user_id: ID của người dùng cần chỉnh sửa, được gán vào một ô input ẩn.
	edit_username và edit_email: Giá trị của tên và email được hiển thị trong các ô input để người dùng có thể chỉnh sửa.
	Hiển thị popup và overlay:
	editOverlay và editPopup: Được hiển thị thông qua style.display = 'block'.
•	Hàm đóng popup chỉnh sửa người dùng: closeEditPopup
function closeEditPopup() {
    document.getElementById('editOverlay').style.display = 'none';
    document.getElementById('editPopup').style.display = 'none';
}
o	Ý nghĩa: Ẩn popup chỉnh sửa và overlay khi người dùng nhấn nút đóng.
•	Hàm mở popup xác nhận xóa người dùng: openDeletePopup
function openDeletePopup(userId) {
    document.getElementById('delete_user_id').value = userId; // Gán user_id vào ô ẩn
    document.getElementById('deleteOverlay').style.display = 'block'; // Hiện overlay
    document.getElementById('deletePopup').style.display = 'block'; // Hiện popup
}
o	Ý nghĩa: Hiển thị popup xác nhận xóa người dùng.
o	Chi tiết:
	Gán giá trị ID: ID của người dùng cần xóa được gán vào một ô input ẩn (delete_user_id) để xử lý ở phía backend.
	Hiển thị popup và overlay: style.display = 'block' để hiển thị các phần tử.
•	Hàm đóng popup xác nhận xóa: closeDeletePopup
function closeDeletePopup() {
    document.getElementById('deleteOverlay').style.display = 'none';
    document.getElementById('deletePopup').style.display = 'none';
}
o	Ý nghĩa: Ẩn popup xác nhận xóa và overlay khi người dùng nhấn nút đóng.

2.3.	Hiện thị kết quả
•	Hiển thị phía người dùng 
 

•	Có nút mua hàng khi ấn vào hiển thị form nhập thông tin để đặt hàng 

•	Khi đặt hàng thành công thông tin người mua được thêm ở bảng order
 

•	Trang đăng nhập quản trị
  

•	Khi đăng nhập thành công vào trang tổng quan với biểu đồ đơn hàng đã đặt với danh mục sản phẩm
     

•	Quản lý sản phẩm có đầy đủ thêm sửa xóa
        
   
•	Quản lý đơn hàng
 
          
•	Quản lý tài khoản 
       
     
