# WebsiteTastefood PWA
**Ini adalah website restoran Tastefood yang dibuat untuk mata kuliah Pemrograman Web ITS**    
Semua Pemrograman dilakukan di Brackets dan Visual Studio Code, code editor khusus Website yang memiliki fitur Live Preview   
Website ini dihosting di alamat web [Tastefood Restaurant](http://tastefood.my.id/).    
Website ini sudah divalidasi oleh W3C CSS Validator     
![CSS Validator Badge](http://jigsaw.w3.org/css-validator/images/vcss) ![CSS Validator Badge](http://jigsaw.w3.org/css-validator/images/vcss-blue)     
Website ini sudah divalidasi oleh W3C HTML Validator     
![HTML Validator Badge](https://www.w3.org/Icons/valid-html401) ![HTML Validator Badge](https://www.w3.org/Icons/valid-html401-blue) 

### Website ini dibuat dengan konsep PWA menggunakan Service Worker, Promise, Framework Materialize, PHP Versi 7.3, MySQL, dan Javascript standar ES6:  
Adapun website yang saya buat saat ini sudah memenuhi:  
-Menampilkan 9 halaman, dengan menampilkan file gambar dengan tema makanan dengan fungsi MPA. (Terpenuhi)  
-Menampilkan daftar tautan halaman di Navbar untuk PC dan sidebar untuk Mobile yang sedikit berbeda untuk memenuhi konsep Responsive dalam Navbar (Terpenuhi)  
-Menerapkan konsep responsive untuk setiap konten yang ada di Website menggunakan Framework Materialize dan Media Queries. (Terpenuhi)    
-Menerapkan fitur add to homescreen, dengan menyertakan ikon dan splash screen menggunakan PWA. (Terpenuhi)    
-Dapat diakses dalam mode offline tanpa ada satupun aset dan konten yang broken sejak akses pertama menggunakan caching Service Worker. (Terpenuhi)  
-Memiliki list yang dibuat untuk memberikan cara melakukan order sebuah menu di Restoran Tastefood. (Terpenuhi)    
-Memiliki Link yang hiperaktif ketika dilakukan hover, link ini akan menghubungkan Website Restoran Tastefood dengan Github Repository. (Terpenuhi)    
-Memiliki Page LOGIN dan REGISTER akun yang berguna agar user yang ingin mengakses website ini bisa mendapatkan session mereka masing-masing. (Terpenuhi)    
-Setiap kali User melakukan LOGIN atau REGISTER, password mereka sudah dilakukan hashing untuk menambah keamanan website. (Terpenuhi)   
-Memiliki sebuah page yang dapat melakukan CREATE, READ, dan DELETE ke dalam database untuk melakukan order di Restoran Tastefood. (Terpenuhi)      
-Memiliki sebuah page yang dapat melakukan READ dari database dan menampilkannya dalam bentuk table untuk list makanan apa saja yang dipesan. (Terpenuhi)   
-Memiliki sebuah page yang dapat melakukan SUBMIT dan FORM ACTION ke dalam database. (Terpenuhi)   

### Adapun beberapa fitur yang akan segera ditambahkan ke dalam Website ini adalah:    
-Semua fitur yang diminta oleh Mata Kuliah Pemrograman Web ITS sudah ditambahkan 

### Website ini juga sudah memiliki penghargaan:  
-HTML Rookie Leader (dari Mata Kuliah Pemrograman Web)    
-HTML Rookie 100 (dari Mata Kuliah Pemrograman Web)      
-CSS Rookie 100 (dari Mata Kuliah Pemrograman Web)    
-JS Rookie Leader (dari Mata Kuliah Pemrograman Web)  
-JS Rookie 100 (dari Mata Kuliah Pemrograman Web)  

### Log Harian Update dan Commit Website Tastefood:  
1. Hari Pertama (20 Oktober 2020) :        
-Mempelajari Framework Materialize CSS dan Materialize JS  
-Mempelajari cara menerapkan Service Worker ke dalam sebuah Website  
-Mempelajari cara menerapkan Promise ke dalam sebuah Website  
-Mempelajari cara menerapkan Caching Dinamis ke dalam sebuah Website  
2. Hari Kedua (22 Oktober 2020):  
-Melakukan inisiliasi Repository Github  
-Melakukan Instalasi Framework Materialize CSS dan Materialize JS  
-Melakukan download Starter Template Materialize  
3. Hari Ketiga (25 Oktober 2020):  
-Melakukan Perubahan Layout dari Starter Template Materialize yang awalnya SPA (single Page) menjadi MPA (multi page)          
-Menggunakan pengaturan script dari nav.js dan nav.html agar bisa mengubah dari SPA menjadi MPA     
-Menggunakan init.js untuk menginisialisasi sidebar dan navbar secara responsif
4. Hari Keempat (31 Oktober 2020):   
-Pembuatan Landing Pages untuk Home.html , Menu.html , Location.html , dan Contact.html untuk memenuhi konsep MPA   
-Melakukan perubahan layout untuk pembuatan website Restoran Tastefood    
5. Hari Kelima (7 November 2020):   
-Pembuatan logo Restoran Tastefood  
-Pencarian Color Pallete yang sesuai untuk sebuah Restoran    
-Pencarian grafik dan images dari menu, lokasi, dan koki    
-Pencarian icon dari Materialize untuk kontak Website    
-Pembuatan Favicon untuk logo Website    
-Memasukkan grafik yang sudah didapatkan ke dalam Website    
-Memasukkan Color Pallete yang sudah didapatkan ke dalam Website   
6. Hari Keenam (13 November 2020):    
-Pembuatan Media Query untuk mengatur Responsif di PC ataupun mobile untuk membantu grid layout yang disediakan Materialize CSS lebih indah lagi  
-Testing Live Preview dari Website sebelum lanjut ke tahap berikutnya    
7. Hari Ketujuh (15-16 November 2020):
-Pembuatan Service Worker dan penerapan Chain Promise ke dalam Website    
-Melakukan Caching semua asset website ke dalam Service Worker tetap bisa digunakan dalam keadaan offline    
-Pembuatan Script.js untuk melakukan register Service Worker  
8. Hari Kedelapan (17 November 2020):  
-Pembuatan Manifest.json untuk memberikan identitas ke dalam Website Tastefood  
-Pembuatan logo Restoran Tastefood dalam berbagai macam ukuran untuk memenuhi SEO Google dengan preview yang Any Maskable  
-Testing terakhir Front End dari Website Tastefood  
**Semua Testing Front End berhasil baik dalam mode online ataupun offline dan tidak ada error di console**    
9. Hari Kesembilan (18 November 2020):  
-Update ke dalam Repository   
10. Hari Kesepuluh:  
-Menambahkan Form Login User, agar user dapat melakukan login    
-Menambahkan Form Register User, agar user dapat melakukan register user     
-Menambahkan Form Order, agar user dapat melakukan pemesanan makanan ke dalam restoran Tastefood      
11. Hari Kesebelas:   
-Melakukan perubahan bentuk Website yang awalnya MPA menjadi SPA agar bisa lebih sesuai dengan keperluan website    
12. Hari Keduabelas:    
-Menambahkan User Session dengan fungsi Login dan Logout    
-Login dengan password sudah menggunakan fungsi Hashing untuk tambahan keamanan     
13. Hari Ketigabelas:  
-Menambahkan fungsi Register User, agar user dapat membuat akunnya sendiri untuk login ke Tastefood      
-Register dengan password sudah menggunakan fungsi Hashing untuk tambahan keamanan      
14. Hari Keempatbelas:    
-Melakukan minor fix terhadap bug dan testing terhadap user session dan fitur LOGIN, LOGOUT, dan REGISTER    
**Semua Testing User Session berhasil baik dalam mode online ataupun offline dan tidak ada error di console**    
15. Hari Kelimabelas:    
-Menambahkan fungsi Create Order, agar user bisa menambahkan order   
-Menambahkan fungsi Read Order, agar table di form Order dapat membaca order apa saja yang sudah masuk    
-Menambahkan fungsi Delete Order, agar user dapat menghapus order
16. Hari Keenambelas:  
-Melakukan minor fix terhadap bug dan testing terhadap CRD yang ada di dalam Website     
-Melakukan hosting terhadap Website Tastefood di alamat web tastefood.my.id   
-Melakukan update terhadap diary / laporan progress website    
**Semua Testing CRD berhasil baik dalam mode online ataupun offline dan tidak ada error di console**
