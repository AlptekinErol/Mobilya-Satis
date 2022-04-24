# Mobilya-Satis
Mobilya satış e ticaret sitesi
Bizden istenen E Ticaret sitesini oluşturmaya başlarken öncelik olarak Database olarak MySql kullanacağımıza karar vererek , Veritabanımızı hazırladık.
Veritabanında Admin Id ,Admin Adı ve Admin şifresi olacak şekilde Admin Tablosu ; Kullanıcı Adı , Şifre ve Eposta olacak şekilde Müşteri(Users) Tablosu ;
Ürün Id , Ürün Adı ,Fiyatı ,Detayı ve Fotoğrafı olacak şekilde Ürün Tablosu.Burada Fotoğraf kısmında Ürünün ilgili fotoğrafının dosya yolu şeklinde tutarak Laravel 
projesinin içerisinde bulunu public klasöründe ulaşılacak şekilde yol belirledik örnek olarak : assets/images/foto1.jpg bu yol fotoğrafın projede bulunduğu klasördür.
Bu sayede ilgili ürünün fotoğrafını sayfalarda kullanırken , veritabanında ürünler tablosunda bulunan 'foto' column sayesinde fotoğrafa ulaşabiliyoruz. Son olarak 
Sepet Id , Müşteri Id ve ürün Id bulunan sepet tablosunu oluşturduk. Sepet tablosuna Müşteri ve Ürünler Tablosu arasında ilişki kurarak ilgili tablolara Join komutlarıyla
ulaşabiliyoruz.

Müşteri üye değilse giriş sayfasında üye olarak Alışverişe başlamak üzere sayfamıza giriş yaptıktan sonra kendi bilgilerini görüntüleyebildiği Pop-up sayfası , kendi
bilgilerini güncellemek istediği veya hesabını silmek istediği zaman "Sayfam" adlı kendi özel sayfasına giderek Kişisel işlemlerini yapabildiği bir sayfası da mevcut.

Projemizde Hazır Responsive yapıda bir template kullanarak , sitemizin daha profesyonel görünmesini sağladık. Ürünler (products) sayfasında her ürün için kendi sayfasında
Ürüne ait bilgileri, fiyatı ve detayı gösterebilmek için Ürünler tablosunda bulunan ürün Id üzerinden sayfalama yaparak ürüne tıklanıldığında her ürünün kendine ait bilgi
sayfalarını oluşturduk.

Anasayfamızda Ürünlere ait kampanya , indirim , alışverişe başla (products) sayfasına gidiş ve haberler gibi sade ama güzel bir Hazır template kullandık.

Projenin Admin Panelinde yine Hazır responsive bir yapı kullanarak burada Admin yetkisine sahip kişiler Kullanıcı adı ve şifreleriyle giriş yaparak Admin panelinde Ürün
Müşteri veya Adminlerle alakalı işlemleri yönetebiliyor.

Siteye yeni bir ürün eklenicekse Ürün ekleme işlemleri sayfasından ilgili ürünün adını , fiyatını ayrıntısını ve fotoğrafını seçerek veritabanına kaydını yapıyor ve güncel
olarak Product sayfasına bu ürünün eklenmesini sağlıyor.Aynı şekilde Ürün silinecekse güncel olarak veritabanından listenen ürünleri görüntüleyerek sistemden kaldırabiliyor
Ürüne ait yanlış bir bilgilendirme durumunda ise aynı şekilde Ürün güncelleme sayfasından ürüne ait girilen yanlış bilgileri veya fotoğrafını güncel olarak değiştirebiliyor.

Müşterileri kontrol edebilmek için Sisteme yeni müşteri ekleme , Müşteri bilgileri Güncelleme ve Müşteri Hesabı silme veya dondurma gibi işlemleri de Müşteri
işlemleri sayfasından kontrol edebiliyor.

Admin olarak sisteme yeni bir admin atanacak, silinecek veya mevcut admin bilgileri güncellenecek olursa , Admin işlemleri üzerinden bu işlemleri de yaparak hem veritabanı
üzerinden hemde site üzerinden güncel bir şekilde bu işlemleri gerçekleştiriyor olacak.

Son olarak projede eksik bulunan sepete ekle ve satın alma işlemleri için Laravel Mvc yapısını iyice öğrenmeye çalışarak eksiklerimizi gideriyor olacağız...
