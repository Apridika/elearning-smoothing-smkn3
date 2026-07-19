<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materis')->truncate();

        DB::table('materis')->insert([
            [
                'kode_modul' => 'SUB-01',
                'judul' => 'Peralatan, Bahan Dan Kosmetik Pelurusan',
                'deskripsi_singkat' => 'Materi seputar alat catok, hair dryer, jenis-jenis lenan pendukung, serta kosmetika utama seperti hair repair dan anti frizz.',
                'konten_bacaan' => '
                    <p class="mb-4 font-bold text-[#5B1963]">Kegiatan Pembelajaran 2: PROSEDUR PELURUSAN RAMBUT</p>
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Uraian Materi: Peralatan, Bahan Dan Kosmetik</h3>
                    
                    <p class="mb-2"><strong>Alat catok atau pelurus rambut:</strong> memiliki tujuan untuk membuat rambut menjadi lurus dengan memanfaatkan suhu tinggi, yang disesuaikan dengan keadaan kekuatan rambut.</p>
                    <!-- GAMBAR 1: ALAT CATOK -->
                    <div class="max-w-md mx-auto aspect-[4/3] rounded-2xl overflow-hidden shadow-sm border border-slate-100 my-4">
                    <img src="/images/alat-catok.jpg" alt="Alat Catok Pelurus Rambut" class="w-full h-full object-cover">
                    </div>
                    <p class="text-center text-xs text-gray-450 italic mb-6">(Sumber: http://fjb.kaskus.co.id/thread/)</p>
                    
                    <p class="mb-2"><strong>Hair Dryer:</strong> memiliki kemampuan untuk mengeringkan rambut dengan suhu yang disesuaikan dengan keadaan kekuatan rambut pelanggan. Alat ini dilengkapi dengan daya sebesar 1500 watt.</p>
                    <!-- GAMBAR 2: HAIR DRYER -->
                    <div class="max-w-md mx-auto aspect-[4/3] rounded-2xl overflow-hidden shadow-sm border border-slate-100 my-4">
                        <img src="/images/hair-dryer.jpg" alt="Hair Dryer" class="w-full h-full object-cover">
                    </div>
                    <p class="text-center text-xs text-gray-450 italic mb-6">(Sumber: Dokumentasi Modul)</p>
                    
                    <p class="mb-4"><strong>Jepitan bergigi:</strong> digunakan untuk menggigit rambut saat proses pemisahan atau penataan.</p>
                    
                    <p class="mb-2"><strong>Sisir berekor:</strong> digunakan untuk menyisir rambut, dan penggunaan bahan anti panas dapat membantu menarik dan meluruskan rambut.</p>
                    <!-- GAMBAR 3: SISIR BEREKOR -->
                    <div class="max-w-md mx-auto aspect-[4/3] rounded-2xl overflow-hidden shadow-sm border border-slate-100 my-4">
                        <img src="/images/sisir-berekor.jpg" alt="Sisir Berekor Anti Panas" class="w-full h-full object-cover">
                    </div>
                    <p class="text-center text-xs text-gray-450 italic mb-6">(Sumber: Dokumentasi Modul)</p>
                    
                    <p class="mb-4"><strong>Handuk:</strong> digunakan untuk mengeringkan rambut setelah dicuci.</p>
                    
                    <p class="mb-4"><strong>Kapas:</strong> untuk menghapus sisa obat yang menetes di kulit.</p>
                    
                    <p class="mb-4"><strong>Tissue:</strong> untuk membersihkan residu kosmetik yang menempel pada kulit.</p>
                    
                    <p class="mb-4"><strong>Cape:</strong> untuk menjaga pelanggan agar tidak terkena cairan atau obat yang dapat merusak pakaian mereka yang terbuat dari bahan parasut.</p>
                    
                    <p class="mb-4"><strong>Shampoo:</strong> untuk membersihkan dari kotoran dan minyak alami yang menempel pada kulit kepala sebelum menjalani proses pelurusan rambut.</p>
                    
                    <p class="mb-4"><strong>Conditioner:</strong> dipergunakan untuk melembabkan rambut, mencegah kerusakan setelah diluruskan. Juga berfungsi untuk menutup kembali pori-pori rambut dan melapisi selaput rambut dari ikatan disulfida.</p>
                    
                    <p class="mb-2"><strong>Hair Repair:</strong> bagi mereka yang mengalami masalah rambut kering serta bercabang setelah menjalani pelurusan, baik itu dilakukan Smoothing ataupun Rebounding, disarankan menggunakan Refresh Rebounding untuk merawat rambut lurus dengan optimal, meningkatkan kesehatan dan memberikan kilauan.</p>
                    <!-- GAMBAR 4: HAIR REPAIR -->
                    <div class="max-w-md mx-auto aspect-[4/3] rounded-2xl overflow-hidden shadow-sm border border-slate-100 my-4">
                        <img src="/images/hair-repair.jpg" alt="Makarizo Refresh Rebounding Hair Repair" class="w-full h-full object-cover">
                    </div>
                    <p class="text-center text-xs text-gray-450 italic mb-6">(Sumber: http://www.makarizo.co.id/web/tips-rambut/709/)</p>
                    
                    <p class="mb-2"><strong>Anti Frizz:</strong> digunakan untuk meningkatkan elastisitas rambut dan mengembalikan kelembabannya, menghasilkan tampilan akhir yang lebih rata.</p>
                    <!-- GAMBAR 5: ANTI FRIZZ -->
                    <div class="max-w-md mx-auto aspect-[4/3] rounded-2xl overflow-hidden shadow-sm border border-slate-100 my-4">
                        <img src="/images/anti-frizz.jpg" alt="Makarizo Advisor Anti Frizz" class="w-full h-full object-cover">
                    </div>
                    <p class="text-center text-xs text-gray-450 italic mb-6">(Sumber: http://www.makarizo.co.id/web/tips-rambut/709/)</p>
                    
                    <p class="mb-4"><strong>Cream pelurusan:</strong> pengobatan untuk meratakan struktur rambut.</p>
                    
                    <p class="mb-2"><strong>Neutralizing:</strong> untuk menyeimbangkan rambut setelah proses pertama pembilasan dan pelurusan.</p>
                    <!-- GAMBAR 6: RANGKAIAN KOSMETIK -->
                    <div class="max-w-md mx-auto aspect-[4/3] rounded-2xl overflow-hidden shadow-sm border border-slate-100 my-4">
                        <img src="/images/kosmetik-pelurusan.jpg" alt="Rangkaian Kosmetika Pelurusan Maxi Smoothing" class="w-full h-full object-cover">
                    </div>
                    <p class="text-center text-xs text-gray-450 italic mb-2">Rangkaian Kosmetika Pelurusan</p>
                    <p class="text-center text-xs text-gray-450 italic mb-6">(Sumber: http://www.makarizo.co.id/web/news/685/makarizo)</p>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_modul' => 'SUB-02',
                'judul' => 'Menganalisa Rambut',
                'deskripsi_singkat' => 'Prosedur penting dalam menganalisis tekstur, ketebalan, porositas, elastisitas, bentuk gelombang, serta karakteristik ras rambut.',
                'konten_bacaan' => '
                    <h3 class="text-lg font-bold text-[#5B1963] mb-4">Menganalisa Rambut</h3>
                    <p class="mb-4">Sebelum melakukan pelurusan rambut, perlu menganalisis kondisi kulit kepala dan rambut terlebih dahulu. Hal ini bertujuan untuk membantu dalam pemilihan kosmetik yang tepat dan sesuai. Selain itu, analisis ini akan sangat membantu dalam mengevaluasi sejauh mana efektivitas dan dampak penggunaan produk pelurusan tersebut.</p>
                    <p class="mb-4">Menganalisis rambut melibatkan perbandingan contoh rambut dari berbagai sumber dengan rambut Anda sendiri. Proses ini dilakukan dengan menggunakan kriteria seperti tekstur, ketebalan, porositas, elastisitas, dan pola gelombang rambut.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Tekstur Rambut</h4>
                    <p class="mb-4">Berdasarkan ukuran diameter, rambut dapat diklasifikasikan menjadi "kasar," "halus," atau "menengah." Rambut dengan diameter terbesar dikategorikan sebagai kasar, sementara rambut dengan diameter terkecil diklasifikasikan sebagai halus. Rambut menengah berada di tengah-tengah kedua jenis tersebut dan dianggap sebagai tipe rambut normal yang tidak membutuhkan perawatan khusus. Rambut kasar memiliki kekuatan lebih karena mengandung lebih banyak materi dibandingkan dengan jenis rambut lainnya. Meskipun demikian, rambut yang memiliki tekstur kasar juga termasuk yang paling sulit untuk ditangani, seperti proses pewarnaan.</p>
                    <p class="mb-4">Tidak seperti rambut yang halus yang dapat diatasi dengan mudah, rambut halus juga cenderung lebih rentan terhadap potensi kerusakan akibat penggunaan prosedur yang berlebihan. Setiap individu memiliki gaya rambut yang unik, sehingga tiap bagian kepala memiliki tekstur rambut yang berlainan. Misalnya, bagian atas rambut mungkin memiliki tekstur yang kasar, sementara leher dan tengkuk bisa memiliki tekstur yang halus. Jenis ras atau latar belakang etnik tidak memiliki dampak langsung pada tekstur rambut, karena semua jenis ras dan etnik dapat memiliki variasi tekstur rambut yang beragam.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Ketebalan Rambut</h4>
                    <p class="mb-4">Ketebalan rambut mencerminkan jumlah helai rambut di kulit kepala, yang umumnya diukur berdasarkan jumlah helai rambut per inci persegi kulit kepala. Jika penata rambut menyatakan bahwa rambut Anda lebat, ini menunjukkan tingkat ketebalan rambut Anda. Ketebalan rambut umumnya dibagi menjadi kategori tipis, menengah, dan lebat, dan tidak berkaitan dengan tekstur rambut. Rata-rata, seseorang diperkirakan memiliki sekitar 2.200 helai rambut per inci persegi kulit kepala. Ketebalan rambut memainkan peran penting dalam menentukan gaya rambut yang cocok. Rambut jenis lebat sering kali cocok dengan gaya rambut yang berlapis, sedangkan rambut yang tipis lebih cocok dengan gaya rambut lurus. Individu dengan rambut tipis sering kali menggunakan teknik pengunciran untuk memberikan kesan ketebalan yang lebih besar pada tatanan rambut mereka.</p>
                    
                    <hr class="page-break">
                    
                    <h4 class="font-bold text-gray-900 mt-4 mb-2">Porositas Rambut</h4>
                    <p class="mb-4">Porositas merujuk pada tingkat kemampuan rambut dalam menyerap cairan, yang dipengaruhi oleh kondisi lapisan luar rambut yang dapat dikategorikan sebagai rendah, normal, atau tinggi. Kondisi porositas rendah dianggap sebagai yang paling sehat karena lapisannya yang rapat mencegah masuknya dan keluarnya cairan dari rambut.</p>
                    <p class="mb-4">Kategori ini dianggap memiliki tingkat porositas yang rendah karena lapisannya terlalu rapat, sehingga menghalangi pelembap untuk meresap. Rambut dengan porositas rendah cenderung lebih sulit untuk diolah. Sebaliknya, rambut dengan porositas tinggi memiliki struktur rambut yang paling terbuka, sehingga cenderung lebih mudah menyerap cairan.</p>
                    <p class="mb-4">Jika rambut lebih mudah menyerap cairan, kehilangannya juga lebih mudah. Ini karena menggunakan perawatan yang diimbangi asam untuk merapatkan lapisan dan mempertahankan kelembaban di dalam rambut. Saat melakukan pemrosesan rambut menggunakan bahan kimia, orang dengan rambut berporositas tinggi harus sangat berhati-hati agar tidak mengalami kerusakan. Sangat mudah untuk mengidentifikasi jenis porositas rambut yang sebenarnya. Coba rasakan perubahan antara basah dan kering pada rambut Anda. Apabila rambut terasa kasar dan kaku ketika basah, serta menunjukkan kecenderungan lengket atau sedikit lengket, mungkin menandakan tingkat porositas yang tinggi pada rambut.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Elastisitas Rambut</h4>
                    <p class="mb-4">Elastisitas rambut mengacu pada kemampuan rambut untuk meregang dan kembali ke bentuk semula tanpa mengalami kerusakan. Hal ini dapat dipengaruhi oleh tingkat kelembaban dan keadaan kesehatan rambut. Keelastisan rambut berasal dari pinggiran rambut yang saling mengikat. Rambut dengan elastisitas rendah lebih sulit untuk diolah atau dibentuk daripada rambut yang memiliki elastisitas normal atau tinggi. Untuk menguji elastisitas rambut, sampel rambut harus diambil dari berbagai area di kulit kepala. Elastisitas yang tinggi terlihat ketika rambut meregang saat ditarik dan kembali ke bentuk semula setelah dilepaskan. Sebaliknya, jika rambut patah atau tidak kembali ke bentuk semula, itu menunjukkan tingkat elastisitas yang rendah.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Bentuk Gelombang Rambut</h4>
                    <p class="mb-4">Penata rambut berbeda-beda dalam pandangan mereka tentang komponen ini karena komponen ini tidak berkaitan dengan kesehatan rambut. Itu karena semua bentuk gelombang dan pola ditemukan pada rambut yang sehat.</p>
                    <p class="mb-4">Untuk tipe gelombang rambut tertentu ini, rambut dapat diklasifikasikan ke dalam tiga kategori, yakni lurus, keriting dengan pola gelombang yang sangat khas, dan menggulung. Rambut yang bersifat keriting menunjukkan pola gelombang yang membentuk huruf "C" pada rambut pendek dan huruf "S" pada rambut panjang. Rambut yang sangat keriting akan membentuk pola "S" pada rambut pendek dan menunjukkan gelombang berulang jika dibiarkan panjang. Di sisi lain, rambut yang berombak akan menampilkan bentuk spiral.</p>
                    
                    <hr class="page-break">
                    
                    <h4 class="font-bold text-gray-900 mt-4 mb-2">Kepekaan kulit kepala</h4>
                    <p class="mb-4">Tingkat penerimaan kulit kepala seseorang terhadap bahan kimia yang digunakan berbeda-beda. Kulit kepala yang sensitif pasti akan mengalami masalah seperti kemerahan, gatal, ketombe, dan kerusakan rambut. Produk berkualitas tinggi mempertimbangkan tingkat penerimaan kulit pemakainya. Produk harus aman untuk kulit pemakai serta kulit kepala dan rambutnya. Untuk mencapai hal ini, penilaian awal diperlukan.</p>
                    <p class="mb-4">Tes ini dilakukan untuk mengurangi potensi kerusakan pada rambut serta untuk menentukan durasi dan jenis cream yang akan diaplikasikan. Tes elastisitas, umumnya dipakai untuk menilai kondisi dan kekuatan rambut, khususnya pada korteksnya.</p>
                    <p class="mb-4">Satu helai rambut yang sehat dan lembap dapat ditarik hingga mencapai 1/3 dari panjangnya. Rambut yang mengalami kerusakan akan patah ketika ditarik. Pada dasarnya, rambut yang sering menjalani perawatan kimia akan menjadi lebih buruk. Oleh karena itu, harus ditemukan cara untuk memastikan bahwa rambut memerlukan perawatan tambahan secara rutin dan konsisten.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Klasifikasi Rambut Berdasarkan Etnis</h4>
                    <p class="mb-4">Berdasarkan tipe rambut umumnya, jenis rambut dapat diklasifikasikan berdasarkan etnis, termasuk di antaranya ras Asia, ras Eropa, dan ras Afrika.</p>
                    <p class="mb-4"><strong>Tipe Mongoloid:</strong> Rambut ras Asia ini memiliki warna yang hitam, penampang bulat dan bentuk yang lurus.</p>
                    <p class="mb-4"><strong>Tipe Caucasoid:</strong> Rambut ras Eropa ini cenderung berambut ikal atau bergelombang hingga lurus, dengan warna rambut berkisar antara pirang hingga coklat keemasan. Diameter batang rambut tidak sebesar rambut pada orang Mongoloid, dan memiliki bentuk oval dengan penampang yang sedang.</p>
                    <p class="mb-4"><strong>Tipe Negroid:</strong> Rambut ras Afrika ini memiliki bentuk ikal ketat, warna hitam, dan pertumbuhan yang sering tidak teratur. Rambut yang sama sering memiliki penampang pipih, tingkat ketebalan, dan porositas yang berbeda.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Klasifikasi Berdasarkan Tipe Rambut</h4>
                    <p class="mb-4">Dalam mengklasifikasikan tipe rambut, diuraikan ke dalam tiga kategori, yakni (a) rambut yang keriting kribo, (b) rambut yang keriting ikal, dan (c) rambut yang keriting asli. Selain itu, klasifikasi juga dapat dilakukan berdasarkan diameter rambut atau kepadatan helai rambut.</p>
                    <p class="mb-4">Untuk mengukur ketebalan dan diameter helai rambut, diperlukan penggunaan mikroskop elektrik. Tipe rambut ini dapat diklasifikasikan menjadi tiga kategori: halus, standar, dan kasar.</p>
                    <p class="mb-4"><strong>Tipe halus:</strong> Rambut jenis ini memiliki diameter 50 mikron dan terlihat tipis meskipun memiliki banyak helai. Sangat mudah diwarnai, dikeriting, dan di-highlight, dan tampak lebih berserabut daripada rambut tipis.</p>
                    <p class="mb-4"><strong>Tipe normal:</strong> Rambut jenis ini biasanya berdiameter 60 hingga 90 mikron. Berbentuk lurus, gelombang, atau keriting. Kekeringan dapat membuatnya terlihat lebih tipis dari sebelumnya.</p>
                    <p class="mb-4"><strong>Tipe kasar:</strong> Rambut ini memiliki diameter lebih dari 100 mikron, yang membuatnya lebih kuat dan tahan terhadap proses daripada rambut biasa. Membutuhkan perawatan yang rutin serta lebih tahan terhadap air.</p>
                    <p class="mb-4">Setelah melakukan analisis rambut, sebelum melaksanakan proses pelurusan, pastikan untuk mengetahui tipe ikal dan ketebalan rambut Anda agar dapat menentukan produk yang sesuai. Selain itu, memahami kondisi rambut menjadi faktor kunci dalam menentukan waktu dan suhu yang optimal untuk proses tersebut.</p>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_modul' => 'SUB-03',
                'judul' => 'Jenis dan Metode Teknik Pelurusan Rambut',
                'deskripsi_singkat' => 'Penjelasan metode Hair Pressing, zat kimia aktif pelurus (Thio, Soda Api, Amonium Sulfit), serta pemisahan teknik Smoothing & Rebonding.',
                'konten_bacaan' => '
                    <h3 class="text-lg font-bold text-[#5B1963] mb-4">Jenis dan Metode Teknik Pelurusan Rambut</h3>
                    <p class="mb-4">Pelurusan rambut merupakan proses meluruskan rambut ikal dilakukan secara kimiawi dengan alat dan kosmetik untuk meluruskan rambut ikal. Saat ini, beberapa jenis metode pelurusan terus mengalami perkembangan seiring dengan kemajuan peralatan yang digunakan dalam industri perawatan rambut. Proses pelurusan rambut dapat diaplikasikan melalui berbagai metode, antara lain:</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Pengepresan rambut (Hair Pressing)</h4>
                    <p class="mb-4">Proses pengepresan rambut ini dilakukan dengan tujuan mengubah struktur rambut yang sangat ikal dan keriting menjadi lebih rata. Umumnya diperlukan untuk menciptakan desain rambut tertentu. Teknik pelurusan sementara ini melibatkan penggunaan jelly petrolatum atau vaselin bersama dengan sisir panas, yang merupakan sisir yang dipanaskan.</p>
                    <p class="mb-4">Pertama, keringkan rambut. Setelah itu, rambut dibagi dan diberi jelly petrolatum dengan rata. Sebuah sisir berbahan logam kemudian dipanaskan menggunakan listrik atau sumber panas lainnya, dan digunakan dengan cara menggerakkan gigi-gigi sisir ke atas. Ketika rambut ditarik lurus, punggung sisir memberi tekanan pada rambut.</p>
                    <p class="mb-4">Proses pelurusan dilakukan secara bertahap untuk menangani setiap helai rambut, hanya bagian rambut yang telah diproses dengan cara menyisir ke atas untuk menghindari pencampuran dengan rambut lain yang belum mengalami proses.</p>
                    <p class="mb-4">Sebelum menggunakan sisir panas, periksa suhu dengan cara menyentuh sisir pada selembar kertas tisu. Jika kertas tisu mengalami kebakaran atau kerusakan, sisir logam yang memiliki suhu terlalu tinggi sebaiknya tidak digunakan. Sebelumnya telah disebutkan bahwa metode pendekatan walker lebih umum digunakan untuk menciptakan desain penataan tertentu.</p>
                    <p class="mb-4">Ada sejumlah kelemahan dalam metode pengepresan rambut walker, utamanya karena bentuk lurus yang dicapai sangat sedikit. Jika rambut terkena air, bentuk yang baru itu kemudian akan segera kembali ke bentuk awalnya. Metode Walker hanya dapat digunakan guna mencapai rancangan penataan yang saat ini tengah dalam tahap pengolahan pelurusan rambut yang sangat ikal.</p>
                    <p class="mb-4">Jika Anda ingin mendapatkan hasil pelurusan rambut yang lebih tahan lama, disarankan untuk mencoba berbagai jenis produk pelurus, seperti krim atau pasta, yang mengandung berbagai bahan kimia. Yang terutama adalah:</p>
                    
                    <hr class="page-break">
                    
                    <h4 class="font-bold text-gray-900 mt-4 mb-2">Pelurusan Rambut dengan Ammonium Tioglikolat</h4>
                    <p class="mb-4">Ammonium tioglikolat ($NH_4CH_2COOH$), yang merupakan bahan dasar dalam pelurusan, merupakan cairan tak berwarna yang memiliki bau kurang enak dan bersifat alkali, seperti larutan pengeriting. Krim pelurusan thio berperan dalam mengembangkan struktur rambut dan menguraikan ikatan disulfida pada keratin, sehingga membuatnya menjadi lebih lembut. Proses ini serupa dengan proses keriting dingin.</p>
                    <p class="mb-4">Setelah membiarkan ikatan silang bertahan selama 5 hingga 10 menit, sisir rambut secara perlahan, bagian per bagian, arahkan sisir ke depan atau ke atas. Setelah waktu lima belas menit berlalu, sisir bagian belakang dan bawah rambut. Proses penyisiran dilakukan secara lurus dengan menekan tangan selama kurang lebih 15 menit. Setelah proses meluruskan selesai, ikatan disulfida yang patah harus disambungkan kembali untuk menjaga bentuk lurus. Untuk mencapai hal ini, proses normalisasi sama pentingnya dengan proses pengeritingan. Larutan hidrogen peroksida, seperti dalam pengeritingan, dapat digunakan sebagai larutan penormal. Dalam pengaplikasian kosmetik pelurus ini, ikuti dengan cermat petunjuk produsen.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Rambut diluruskan menggunakan natrium hidroksida</h4>
                    <p class="mb-4">Secara umum, proses pelurusan rambut yang menggunakan Natrium Hidroksida (NaOH) atau soda api (caustic soda) sebagai bahan dasar cenderung memiliki reaksi yang sangat efisien dan cepat. Partikel putih dari bahan ini memiliki potensi besar untuk berpengaruh pada kulit dan mungkin berisiko bagi kesehatan mata. Produk pelurus rambut umumnya mengandung Natrium Hidroksida dalam kisaran konsentrasi 5-10%, dengan tingkat pH yang bervariasi antara 7,5 hingga 14, bergantung pada formulasi yang digunakan.</p>
                    <p class="mb-4">Natrium hidroksida merentangkan serat rambut dan menguraikan ikatan disulfida dalam rambut dengan menangkap senyawa atom sulfur (S) dari ikatan disulfida. Selanjutnya, ikatan sulfida bergabung kembali membentuk ikatan lanthionine di antara dua rantai polipeptida yang berhadap-hadapan selama proses penghubungannya kembali. Sangat penting untuk menggunakan krim pelindung di daerah kulit sepanjang pertumbuhan kulit karena sifatnya yang dapat menyebabkan iritasi dan bahkan membakar.</p>
                    <p class="mb-4">Langkah-langkah keamanan pada bagian tertentu: Bagian kulit tertentu, termasuk kulit kepala, harus dijaga dengan hati-hati, terutama ketika dipanaskan sebelum diberikan larutan penormal.</p>
                    <p class="mb-4">Oleh karena itu, obat pelurus rambut natrium hidroksida hanya perlu digunakan selama 7 menit, kemudian perlu segera dikerjakan pembilasan. Menurut A.H. Powitt, durasi pemrosesan rambut rata-rata bervariasi tergantung pada jenis rambut yang sedang diolah. Durasi ideal untuk rambut halus sekitar 2 hingga 3 menit, untuk rambut sedang sekitar 3 hingga 5 menit, dan untuk rambut kasar sekitar 5 hingga 7 menit.</p>
                    <p class="mb-4">Jangan olah rambut virgin selama lebih dari delapan menit. Untuk menghindari kerusakan yang lebih parah, gunakan conditioner atau filler sebelum digunakan pada rambut yang telah diwarnai, mengalami perubahan warna, atau mengalami kerusakan akibat proses penyalutan dan pengeringan yang berlebihan. Setelah olah rambut selesai, rambut dibilas dan dinormalisir seperti metode pelurusan rambut yang lain.</p>
                    
                    <hr class="page-break">
                    
                    <h4 class="font-bold text-gray-900 mt-4 mb-2">Rambut diluruskan dengan Amonium Sulfit</h4>
                    <p class="mb-4">Ammonium sulfit ($(NH_4)_2SO_3$) adalah bahan dasar pelurusan rambut yang paling aman untuk kesehatan rambut, berbentuk kristal bening yang dapat larut dalam air dan asam. Bahan ini berfungsi sebagai agen pereduksi; pada suhu sekitar 37 derajat Celsius, ammonium sulfit dapat menguraikan ikatan sulfida keratin pada rambut. Oleh karena itu, zat ini juga digunakan untuk merumuskan larutan pengeritingan, yang sering dikenal sebagai lotion pengeritingan asam atau netral. Larutan ini tidak menyebabkan rambut membesar atau terlalu lembut seperti larutan alkalin karena sifatnya yang bersifat asam dengan tingkat pH sekitar 6.</p>
                    <p class="mb-4">Larutan pengeriting dan cream pelurus rambut yang mengandung senyawa amonium sulfit tidak mendapatkan promosi yang efektif. Hal ini disebabkan oleh kenyataan bahwa penggunaan produk ini membutuhkan waktu yang cukup lama, dan penggunanya perlu menggunakan topi pemanas agar prosesnya dapat dipercepat.</p>
                    <p class="mb-4">Dalam proses pelurusan rambut, satu hal yang perlu diperhatikan adalah fakta bahwa rambut yang sedang menjalani proses pelurusan menjadi sangat lembut dan mudah patah. Menyisir rambut harus dilakukan dengan hati-hati untuk menghindari kerusakan. Tidak ada justifikasi untuk menggunakan hair straightener dan hair relaxer untuk tujuan yang serupa. Salah satu dipakai untuk meratakan rambut yang keriting, sementara yang lain digunakan untuk mengurangi kekencangan ikal.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Teknik-Teknik Pelurusan</h4>
                    <p class="mb-4">Dalam meluruskan rambut, terdapat dua teknik utama, yaitu rebonding dan smoothing.</p>
                    <p class="mb-4"><strong>Menggunakan Teknik Smoothing Untuk Meluruskan Rambut:</strong> Smoothing adalah cara meluruskan rambut tanpa menggunakan alat khusus. Metode ini menghasilkan rambut yang lebih sehat, menghemat waktu, dan lebih praktis. Meskipun begitu, kekurangan dari teknik terletak pada keterampilan tangan serta pengalaman yang sangat diperlukan; jika dilakukan dengan kurang hati-hati, hasil pelurusan mungkin tidak merata dan dapat menyebabkan rambut menjadi tidak teratur.</p>
                    <p class="mb-4"><strong>Menggunakan Teknik Rebonding Untuk Meluruskan Rambut:</strong> Meluruskan rambut yang awalnya keriting adalah kebalikan dari mengkeritingkan rambut yang lurus. Kedua proses ini melibatkan restrukturisasi ikatan silang disulfida pada keratin rambut, membawanya ke posisi yang lebih teratur dan sejajar. Proses ini dikenal sebagai rebonding, yang artinya mengubah atau memodifikasi posisi ikatan silang keratin yang telah ada pada rambut untuk mencapai bentuk yang diinginkan.</p>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_modul' => 'SUB-04',
                'judul' => 'Prosedur Pelurusan & Klasifikasi Kerusakan Rambut',
                'deskripsi_singkat' => 'Pendalaman langkah kerja pre-rebonding, klasifikasi kerusakan batang rambut level ringan hingga parah, dan SOP aplikasi salon.',
                'konten_bacaan' => '
                    <h3 class="text-lg font-bold text-[#5B1963] mb-4">Rebonding</h3>
                    <p class="mb-4">Rebonding merupakan teknik pelurusan rambut yang dilakukan setelah proses smoothing, rambut kemudian dicuci lalu dikeringkan hingga mencapai tingkat kekeringan sekitar 50–70% kemudian dicatok menggunakan alat. Keuntungan dari metode ini adalah rambut menjadi lebih lurus dan hasilnya lebih tahan lama.</p>
                    <p class="mb-4">Namun, metode ini memiliki kekurangan; harus sangat hati-hati ketika menggunakan alat besi dan sesuaikan dengan standar teknik produk yang digunakan. Sebelum menggunakan teknik rebonding untuk meluruskan rambut, analisis rambut harus dilakukan seperti yang dijelaskan sebelumnya untuk memastikan:</p>
                    <ul class="list-disc pl-5 space-y-2 mb-4">
                        <li>Formula yang dipakai harus sesuai dengan tipe dan kondisi rambut.</li>
                        <li>Pertimbangkan pertumbuhan rambut baru dan rambut yang telah mengalami proses Rebonding.</li>
                        <li>Untuk pertumbuhan rambut baru dengan struktur keriting, termasuk dalam kelompok seperti keriting kribo, keriting alami, dan keriting ikal, dapat diterapkan cream.</li>
                        <li>Bagi rambut yang telah melalui proses Rebonding dalam waktu tertentu, perlu menjalani perawatan terlebih dahulu.</li>
                    </ul>
                    <p class="mb-4">Keputusan untuk melakukan proses perawatan awal (dengan pemanfaatan Hair Repair) disesuaikan dengan tingkat kerusakan pada rambut. Biasanya, kondisi kerusakan pada rambut dapat dikelompokkan ke dalam tiga tingkat, yakni tingkat ringan, sedang (pada area porositas 1 dan 2), dan tingkat parah (pada area porositas 3).</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Tingkat ringan</h4>
                    <p class="mb-4">Rambut mengalami kerusakan ringan pada lapisan kutikula (lapisan pelindung luar rambut). Kerusakan pada tingkat ini mungkin disebabkan oleh faktor-faktor seperti penggunaan panas berlebihan, paparan sinar matahari, atau penggunaan bahan kimia tertentu. Rambut pada tingkat ringan biasanya masih dapat diatasi dengan perawatan yang tepat, seperti menggunakan kondisioner mendalam dan menghindari paparan berlebihan terhadap faktor-faktor penyebab kerusakan.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Tingkat sedang (porositas area 1 dan 2)</h4>
                    <p class="mb-4">Kerusakan pada tingkat sedang mencakup kerusakan pada lapisan kutikula yang lebih serius, dan mungkin juga mencapai lapisan korteks (bagian tengah rambut yang mengandung pigmen warna). Rambut pada tingkat ini dapat menjadi lebih poros, yang berarti lebih mudah menyerap dan kehilangan kelembaban. Kerusakan ini dapat disebabkan oleh penggunaan bahan kimia yang agresif, pemrosesan panas yang berlebihan, atau perawatan yang tidak tepat. Perbaikan pada tingkat ini memerlukan perawatan yang lebih intensif, seperti masker rambut yang mendalam dan perawatan kondisioner intensif.</p>
                    
                    <hr class="page-break">
                    
                    <h4 class="font-bold text-gray-900 mt-4 mb-2">Tingkat parah (porositas area 3)</h4>
                    <p class="mb-4">Rambut mengalami kerusakan parah pada tingkat ini, melibatkan lapisan kutikula yang rusak dan kemungkinan kerusakan pada lapisan korteks yang lebih dalam. Rambut pada tingkat ini dapat menjadi sangat poros, rapuh, dan mudah patah. Penyebab kerusakan pada tingkat ini mungkin melibatkan pemrosesan kimia yang ekstrem, penggunaan alat pengeriting yang berlebihan, atau paparan bahan kimia yang merusak. Perbaikan pada tingkat ini memerlukan perawatan profesional dan mungkin membutuhkan waktu yang lebih lama.</p>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Sebelum menerapkan teknik pelurusan Rebonding, langkah-langkah yang harus dilakukan adalah:</h4>
                    <ol class="list-decimal pl-5 space-y-2 mb-4">
                        <li>Lakukan persiapan awal dengan menyiapkan bahan kosmetika, peralatan, lenan, dan ruang kerja yang digunakan. Pastikan untuk membersihkan semua lenan dan peralatan yang akan dipakai.</li>
                        <li>Persilahkan model atau pelanggan ke area yang sudah disiapkan. Lakukan metode dan beri tahu model apa yang dia inginkan.</li>
                        <li>Untuk memilih produk yang tepat untuk digunakan, periksa dengan teliti kondisi kulit kepala dan rambut pelanggan. Produk dari pelurus rambut hadir dengan banyak jenis kosmetik yang dapat menyesuaikan dengan kondisi rambut dan digunakan secara bertahap. Beberapa jenis pelurus rambut termasuk pelurus dasar, pelurus penghapusan, pelurus refleksi warna, pelurus pada rambut yang dibleaching, pelurus pada rambut yang diwarnai, dan pelurus ekspresi natural.</li>
                    </ol>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">c) Perbedaan Smoothing dan Rebonding</h4>
                    <p class="mb-4">Proses smoothing adalah langkah untuk membuat rambut menjadi lebih lembut atau terasa lebih halus, dan merupakan bagian dari teknik pelurusan Rebonding. Teknik ini melibatkan jepitan dan tekanan dengan menggunakan jari tengah dan telunjuk untuk membuat rambut lebih rileks. Smoothing dianggap sebagai alternatif yang lebih aman dan praktis dibandingkan dengan metode papan yang membutuhkan usaha yang lebih besar.</p>
                    <p class="mb-4">Smoothing tidak menyebabkan rambut menjadi tidak lurus. Rebonding hanya membuat rambut menjadi sedikit lebih ringan, dan apabila rambut sudah lurus, itu akan membuat rambut tampak lebih rapi dan tidak kaku. Jika rambut sudah dicatok, proses pelurusan itu sama dengan rebonding. Oleh karena itu, smoothing melibatkan penggunaan langkah pertama dengan menggunakan teknik jepit dan tekan, sementara Rebonding adalah proses pencatokan yang langsung.</p>
                    
                    <hr class="page-break">
                    
                    <h4 class="font-bold text-gray-900 mt-4 mb-2">Prosedur Pelurusan Rambut</h4>
                    <ul class="list-disc pl-5 space-y-1 mb-4">
                        <li>Konsultasi awal</li>
                        <li>Pemilihan bahan pelurus</li>
                        <li>Pemeriksaan kesehatan rambut</li>
                        <li>Menyiapkan ruangan serta alat dan bahan</li>
                    </ul>
                    
                    <h4 class="font-bold text-gray-900 mt-6 mb-2">Tahap pelaksanaan pelurusan rambut (step by step) :</h4>
                    <ol class="list-decimal pl-5 space-y-3 mb-4">
                        <li><strong>Pencucian rambut:</strong> Rambut dibersihkan dengan mencucinya tanpa menggunakan kondisioner, kemudian dikeringkan hingga sekitar 70% kekeringan.</li>
                        <li><strong>Mulai mengerjakan pelurusan:</strong> Sesuaikan dengan obat pelurus dengan tipe rambut anda dan teknik pelurusan yang akan digunakan. Dengan mengikuti instruksi produk dan teknik yang benar, aplikasikan obat pelurus pada setiap lapisan sambil memijat dengan cara menjepit rambut di antara jari-jari dan menariknya ke bawah.</li>
                        <li>Tunggu sekitar 5 menit sebelum membilas rambut menggunakan air hangat hingga bersih dan biarkan rambut kering sampai 70%.</li>
                        <li>Untuk meratakan rambut, gunakan teknik yang sesuai dan hindari kontak dengan mata.</li>
                        <li>Setelah menggunakan netralizer, aplikasikan conditioner ke seluruh rambut. Biarkan beberapa menit lalu bilas hingga bersih.</li>
                        <li>Keringkan rambut dengan metode yang sesuai dengan teknik pelurusan yang digunakan.</li>
                        <li>Jangan lupa untuk menawarkan produk dan layanan yang paling baik digunakan serta rekomendasi untuk perawatan lanjutan.</li>
                        <li>Perbaiki area kerja dan semua peralatan; susun dan simpan kembali bahan kosmetik.</li>
                    </ol>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kode_modul' => 'SUM-01',
                'judul' => 'Rangkuman Modul Pelurusan Rambut',
                'deskripsi_singkat' => 'Intisari dari seluruh rangkaian unit kompetensi prosedur pelurusan rambut.',
                'konten_bacaan' => '
                    <h3 class="text-lg font-bold text-[#5B1963] mb-4">Rangkuman</h3>
                    <p class="mb-4 leading-relaxed">Proses pelurusan rambut melibatkan pemahaman mendalam terhadap peralatan, bahan, dan kosmetik yang digunakan. Alat-alat seperti catok, hair dryer, jepitan bergigi, dan sisir berekor digunakan bersama dengan bahan-bahan seperti shampoo, conditioner, hair repair, dan anti-frizz.</p>
                    <p class="mb-4 leading-relaxed">Analisis rambut sebelum proses melibatkan evaluasi tekstur, ketebalan, porositas, elastisitas, dan bentuk gelombang rambut. Jenis pelurusan mencakup ammonium tioglikolat, natrium hidroksida, dan ammonium sulfit, dengan teknik smoothing untuk penataan tanpa alat khusus dan rebounding dengan pencatokan setelah proses smoothing. Tahapan melibatkan pencucian, pemilihan bahan pelurus, dan pemeriksaan kesehatan rambut sebelum pelaksanaan utama.</p>
                ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    
}
