<?php
error_reporting(0);
header('Content-Type: text/html; Charset=UTF-8');
@$veri = htmlentities(strtolower($_GET['grd']), ENT_QUOTES, 'UTF-8'); //kullanıcıdan girdiyi aldık

$dizi = array( //replikleri arraya atadık
"Hayat aldığımız nefes sayısı değildir, nefesimizi kesen anların toplamıdır.“Hitch”",
"Eğer senden nefret edersem dünyada sevebileceğim kimse kalmaz.”The Man From Nowhere”",
"Gülersen, bütün dünya seninle birlikte güler… Ağlarsan tek başına ağlarsın. “Oldboy”",
"Bazılarının tesadüf dediği şey bana göre sonuçtur. Başkalarının fırsat dediği şey bana göre maliyettir. “The Matrix” ",
"Uzunca süre maske takarsan altındaki kişiliği de unutursun. “V For Vendetta”",
"Eğer yanıtlarım seni korkutuyorsa o zaman korkutucu sorular sormaktan vazgeçmelisin.”Pulp Fiction”",
"Hayatının amacını, mutlu olduğun yerde ara. “Her Çocuk Özeldir”",
"Deliler mükemmel dava konularıdır. Konuşurlar ama kimse dinlemez.”Zindan Adası”",
"Umut. İnsanın vazgeçemediği illüzyon. Aynı anda en büyük güç ve en büyük zayıflık kaynağınız.”The Matrix”",
"Rüyadayken gördüklerimiz bize gerçek gibi gelir. Ancak uyandığımızda bir tuhaflık olduğunu fark ederiz. “İnception” ",
"Kişi özünü asla değiştirmez etrafındakileri başka birisi olmaya ikna edebilir ama kendini asla.”Olağan Şüpheliler”",
"Neden bana birazcık ilgi gösteren her kadına aşık oluyorum? “Sil Baştan”",
"Sen müziğe dokunamazsın ama o sana dokunabilir. ” Regular”",
"Afrikada bir anne çocuğuna “tabağını bitir” diye bağırana kadar, dünyanın bütün tabaklarını kırmak istiyorum. “Morgan Freeman”",
"Bir tarladaki mor renkli çiçeklerin yanından geçip de onlari farketmemek Tanrı’yi sinirlendirir.”Mor Yıllar”",
"Gün geçtikçe kaybediyorsun beni, farkında değilsin sadece.” Beni Böyle Sev”",
"Neden hep bu kadar şüphecisin? _Kronolojik mi cevaplayayım, alfabetik mi? “Sherlock Holmes”",
"Korku en bulaşıcı hastalıktır.” Sherlok Holmes”",
"Samimi taklidi yapabiliyorsan hemen hemen her şeyin taklidini yapabilirsin. ” Dr. House”",
"İnsanı öldürmeyen şey tuhaflaştırır.”Batman Kara Şovalye”",
"Son gülen sen olacaksın, çünki geç anlıyorsun. “Cem Yılmaz – Fundamentals”",
"Ağlayınca hiç bir şey geçmiyor anlıyor musun? “Leon”",
"Jeny ve ben köfte ve patates gibiydik.”Forrest Gump”",
"Düşüncelerimi anlatan kelimelerin git gide anlamsızlaştığını farkettim.”Özgürlük Yolu”",
"Para silahtır ama siyaset, tetiği ne zaman çekeceğini bilmektir.”The Godfather”",
"Cevabı olmayan herhangi bir şeyin sorusu da olmaz zaten sayın dinleyen. Sorular sadece cevabı duymak isteğiyle var olurlar.  “Kaybedenler Kulubü”",
"İstesem aşık olabilirim ama üşeniyorum. “Garfield “",
"Ne bakıyorsunuz? Siz hepiniz dallamasınız. Niye biliyor musunuz? İstediklerinizi yapacak yürek yok sizde. Benim gibi adamlara muhtaçsınız.",
"Benim gibi adamlara muhtaçsınız, böylece parmakla gösterip… “işte, kötü adam o” diyebiliyorsunuz. ",
"Size söyleyeyim, bir daha böyle kötü bir adamı zor görürsünüz. Hadi. Kötü adama yol açın…”Tony Montana”",
"Hayatımda hem var hem de yok gibisin. “Demn Rayt ",
"“The” ekini atın “facebook” daha temiz. “Sosyal Ağ”",
"Benim de bir hayalim vardı. Deme! Bende de böbrek taşı var. Zamanla geçiyor her şey.",
"Şimdi gülümseyip sizin kollarınıza doğru koşsam, o zaman şimdi gördüklerimi görebilir miydiniz? “Into the Wild”",
"Kendimi arıyorken olmaktan korktuğum yerdeyim “Beylikdüzündeyim” “Çalgı Çengi”",
"Ernest Hemingway, dünya güzel bir yer ve de uğruna savaşmaya değer demiş. Ben cümlenin ikinci yarısına katılıyorum. “Seven”",
"Ben herzaman doğruyu söylerim, yalan söylerken bile. “Yaralı Yüz”",
"Yakınlık, uzaklıktan daha sıkıntılıdır. Çünkü her yakınlıkta kaybetme korkusu, uzaklıkta ise kavuşma ümidi vardır.”Prison Break”",
"Birlikte olmayı haketmeyen milyonlarca insan yan yanayken, ben neden hala senden ayrı nefes alıyorum.?”Melekler Şehri” ",
"İnsanlar size kim olduklarını anlatırlar ama biz inanmayız. Çünkü biz onların, olmasını istediğimiz kişiler olmalarını isteriz.”Mad Man”",
"Planı olan bir adam gibi mi duruyorum. Benim ne olduğumu biliyor musun? Ben arabaları kovalayan köpek gibiyim. Eğer yakalasam bile ne yapacağımı bilemem. Anlarsın ya… Ben sadece yaparım. “Batman Kara Şovalye” "
); 



if( strcmp($veri,"replik")==0){	 //Eğer veri değişkeni "replik" ise
$dizis = count($dizi)-1; //sayı bul

echo $dizi[rand(0,$dizis)]; //Random bir replik yolluyoruz
}	
?>