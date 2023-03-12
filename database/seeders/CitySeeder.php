<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
           ['name' => 'Ain Harrouda'],
           ['name' => 'Ben Yakhlef'],
           ['name' => 'Bouskoura'],
           ['name' => 'Casablanca'],
           ['name' => 'Mediouna'],
           ['name' => 'Mohammadia'],
           ['name' => 'Tit Mellil'],
           ['name' => 'Ben Yakhlef'],
           ['name' => 'Bejaad'],
           ['name' => 'Ben Ahmed'],
           ['name' => 'Benslimane'],
           ['name' => 'Berrechid'],
           ['name' => 'Boujniba'],
           ['name' => 'Boulanouare'],
           ['name' => 'Bouznika'],
           ['name' => 'Deroua'],
           ['name' => 'El Borouj'],
           ['name' => 'El Gara'],
           ['name' => 'Guisser'],
           ['name' => 'Hattane'],
           ['name' => 'Khouribga'],
           ['name' => 'Loulad'],
           ['name' => 'Oued Zem'],
           ['name' => 'Oulad Abbou'],
           ['name' => 'Oulad H\'Riz Sahel'],
           ['name' => 'Oulad M\'rah'],
           ['name' => 'Oulad Said'],
           ['name' => 'Oulad Sidi Ben Daoud'],
           ['name' => 'Ras El Ain'],
           ['name' => 'Settat'],
           ['name' => 'Sidi Rahhal Chatai'],
           ['name' => 'Soualem'],
           ['name' => 'Azemmour'],
           ['name' => 'Bir Jdid'],
           ['name' => 'Bouguedra'],
           ['name' => 'Echemmaia'],
           ['name' => 'El Jadida'],
           ['name' => 'Hrara'],
           ['name' => 'Ighoud'],
           ['name' => 'Jamaat Shaim'],
           ['name' => 'Jorf Lasfar'],
           ['name' => 'Khemis Zemamra'],
           ['name' => 'Laaounate'],
           ['name' => 'Moulay Abdallah'],
           ['name' => 'Oualidia'],
           ['name' => 'Oulad Amrane'],
           ['name' => 'Oulad Frej'],
           ['name' => 'Oulad Ghadbane'],
           ['name' => 'Safi'],
           ['name' => 'Sebt El Maarif'],
           ['name' => 'Sebt Gzoula'],
           ['name' => 'Sidi Ahmed'],
           ['name' => 'Sidi Ali Ban Hamdouche'],
           ['name' => 'Sidi Bennour'],
           ['name' => 'Sidi Bouzid'],
           ['name' => 'Sidi Smail'],
           ['name' => 'Youssoufia'],
           ['name' => 'Fes'],
           ['name' => 'Ain Cheggag'],
           ['name' => 'Bhalil'],
           ['name' => 'Boulemane'],
           ['name' => 'El Menzel'],
           ['name' => 'Guigou'],
           ['name' => 'Imouzzer Kandar'],
           ['name' => 'Imouzzer Marmoucha'],
           ['name' => 'Missour'],
           ['name' => 'Moulay Yaacoub'],
           ['name' => 'Ouled Tayeb'],
           ['name' => 'Outat El Haj'],
           ['name' => 'Ribate El Kheir'],
           ['name' => 'Sefrou'],
           ['name' => 'Skhinate'],
           ['name' => 'Tafajight'],
           ['name' => 'Arbaoua'],
           ['name' => 'Ain Dorij'],
           ['name' => 'Dar Gueddari'],
           ['name' => 'Had Kourt'],
           ['name' => 'Jorf El Melha'],
           ['name' => 'Kenitra'],
           ['name' => 'Khenichet'],
           ['name' => 'Lalla Mimouna'],
           ['name' => 'Mechra Bel Ksiri'],
           ['name' => 'Mehdia'],
           ['name' => 'Moulay Bousselham'],
           ['name' => 'Sidi Allal Tazi'],
           ['name' => 'Sidi Kacem'],
           ['name' => 'Sidi Slimane'],
           ['name' => 'Sidi Taibi'],
           ['name' => 'Sidi Yahya El Gharb'],
           ['name' => 'Souk El Arbaa'],
           ['name' => 'Akka'],
           ['name' => 'Assa'],
           ['name' => 'Bouizakarne'],
           ['name' => 'El Ouatia'],
           ['name' => 'Es-Semara'],
           ['name' => 'Fam El Hisn'],
           ['name' => 'Foum Zguid'],
           ['name' => 'Guelmim'],
           ['name' => 'Taghjijt'],
           ['name' => 'Tan-Tan'],
           ['name' => 'Tata'],
           ['name' => 'Zag'],
           ['name' => 'Marrakech'],
           ['name' => 'Ait Daoud'],
           ['name' => 'Amizmiz'],
           ['name' => 'Assahrij'],
           ['name' => 'Ait Ourir'],
           ['name' => 'Ben Guerir'],
           ['name' => 'Chichaoua'],
           ['name' => 'El Hanchane'],
           ['name' => 'El Kelaa des Sraghna'],
           ['name' => 'Essaouira'],
           ['name' => 'Fraita'],
           ['name' => 'Ghmate'],
           ['name' => 'Ighounane'],
           ['name' => 'Imintanoute'],
           ['name' => 'Kattara'],
           ['name' => 'Lalla Takerkoust'],
           ['name' => 'Loudaya'],
           ['name' => 'Laattaouia'],
           ['name' => 'Moulay Brahim'],
           ['name' => 'Mzouda'],
           ['name' => 'Ounagha'],
           ['name' => 'Sid L\'Mokhtar'],
           ['name' => 'Sid Zouin'],
           ['name' => 'Sidi Abdallah Ghiat'],
           ['name' => 'Sidi Bou Othmane'],
           ['name' => 'Sidi Rahhal'],
           ['name' => 'Skhour Rehamna'],
           ['name' => 'Smimou'],
           ['name' => 'Tafetachte'],
           ['name' => 'Tahannaout'],
           ['name' => 'Talmest'],
           ['name' => 'Tamallalt'],
           ['name' => 'Tamanar'],
           ['name' => 'Tamansourt'],
           ['name' => 'Tameslouht'],
           ['name' => 'Tanalt'],
           ['name' => 'Zeubelemok'],
           ['name' => 'Meknes'],
           ['name' => 'Khenifra'],
           ['name' => 'Agourai'],
           ['name' => 'Ain Taoujdate'],
           ['name' => 'MyAliCherif'],
           ['name' => 'Rissani'],
           ['name' => 'Amalou Ighriben'],
           ['name' => 'Aoufous'],
           ['name' => 'Arfoud'],
           ['name' => 'Azrou'],
           ['name' => 'Ain Jemaa'],
           ['name' => 'Ain Karma'],
           ['name' => 'Ain Leuh'],
           ['name' => 'Ait Boubidmane'],
           ['name' => 'Ait Ishaq'],
           ['name' => 'Boudnib'],
           ['name' => 'Boufakrane'],
           ['name' => 'Boumia'],
           ['name' => 'El Hajeb'],
           ['name' => 'Elkbab'],
           ['name' => 'Er-Rich'],
           ['name' => 'Errachidia'],
           ['name' => 'Gardmit'],
           ['name' => 'Goulmima'],
           ['name' => 'Gourrama'],
           ['name' => 'Had Bouhssoussen'],
           ['name' => 'Haj Kaddour'],
           ['name' => 'Ifrane'],
           ['name' => 'Itzer'],
           ['name' => 'Jorf'],
           ['name' => 'Kehf Nsour'],
           ['name' => 'Kerrouchen'],
           ['name' => 'M\'haya'],
           ['name' => 'M\'rirt'],
           ['name' => 'Midelt'],
           ['name' => 'Moulay Ali Cherif'],
           ['name' => 'Moulay Bouazza'],
           ['name' => 'Moulay Idriss Zerhoun'],
           ['name' => 'Moussaoua'],
           ['name' => 'N\'Zalat Bni Amar'],
           ['name' => 'Ouaoumana'],
           ['name' => 'Oued Ifrane'],
           ['name' => 'Sabaa Aiyoun'],
           ['name' => 'Sebt Jahjouh'],
           ['name' => 'Sidi Addi'],
           ['name' => 'Tichoute'],
           ['name' => 'Tighassaline'],
           ['name' => 'Tighza'],
           ['name' => 'Timahdite'],
           ['name' => 'Tinejdad'],
           ['name' => 'Tizguite'],
           ['name' => 'Toulal'],
           ['name' => 'Tounfite'],
           ['name' => 'Zaouia d\'Ifrane'],
           ['name' => 'Zaida'],
           ['name' => 'Ahfir'],
           ['name' => 'Aklim'],
           ['name' => 'Al Aroui'],
           ['name' => 'Ain Bni Mathar'],
           ['name' => 'Ain Erreggada'],
           ['name' => 'Ben Taieb'],
           ['name' => 'Berkane'],
           ['name' => 'Bni Ansar'],
           ['name' => 'Bni Chiker'],
           ['name' => 'Bni Drar'],
           ['name' => 'Bni Tadjite'],
           ['name' => 'Bouanane'],
           ['name' => 'Bouarfa'],
           ['name' => 'Bouhdila'],
           ['name' => 'Dar El Kebdani'],
           ['name' => 'Debdou'],
           ['name' => 'Douar Kannine'],
           ['name' => 'Driouch'],
           ['name' => 'El Aioun Sidi Mellouk'],
           ['name' => 'Farkhana'],
           ['name' => 'Figuig'],
           ['name' => 'Ihddaden'],
           ['name' => 'Jaadar'],
           ['name' => 'Jerada'],
           ['name' => 'Kariat Arekmane'],
           ['name' => 'Kassita'],
           ['name' => 'Kerouna'],
           ['name' => 'Laatamna'],
           ['name' => 'Madagh'],
           ['name' => 'Midar'],
           ['name' => 'Nador'],
           ['name' => 'Naima'],
           ['name' => 'Oued Heimer'],
           ['name' => 'Oujda'],
           ['name' => 'Ras El Ma'],
           ['name' => 'Saidia'],
           ['name' => 'Selouane'],
           ['name' => 'Sidi Boubker'],
           ['name' => 'Sidi Slimane Echcharaa'],
           ['name' => 'Talsint'],
           ['name' => 'Taourirt'],
           ['name' => 'Tendrara'],
           ['name' => 'Tiztoutine'],
           ['name' => 'Touima'],
           ['name' => 'Touissit'],
           ['name' => 'Zaio'],
           ['name' => 'Zeghanghane'],
           ['name' => 'Rabat'],
           ['name' => 'Sale'],
           ['name' => 'Ain El Aouda'],
           ['name' => 'Harhoura'],
           ['name' => 'Khemisset'],
           ['name' => 'Oulmes'],
           ['name' => 'Rommani'],
           ['name' => 'Sidi Allal El Bahraoui'],
           ['name' => 'Sidi Bouknadel'],
           ['name' => 'Skhirate'],
           ['name' => 'Tamesna'],
           ['name' => 'Temara'],
           ['name' => 'Tiddas'],
           ['name' => 'Tiflet'],
           ['name' => 'Touarga'],
           ['name' => 'Agadir'],
           ['name' => 'Agdz'],
           ['name' => 'Agni Izimmer'],
           ['name' => 'Ait Melloul'],
           ['name' => 'Alnif'],
           ['name' => 'Anzi'],
           ['name' => 'Aoulouz'],
           ['name' => 'Aourir'],
           ['name' => 'Arazane'],
           ['name' => 'Ait Baha'],
           ['name' => 'Ait Iaaza'],
           ['name' => 'Ait Yalla'],
           ['name' => 'Ben Sergao'],
           ['name' => 'Biougra'],
           ['name' => 'Boumalne-Dades'],
           ['name' => 'Dcheira El Jihadia'],
           ['name' => 'Drargua'],
           ['name' => 'El Guerdane'],
           ['name' => 'Harte Lyamine'],
           ['name' => 'Ida Ougnidif'],
           ['name' => 'Ifri'],
           ['name' => 'Igdamen'],
           ['name' => 'Ighil n\'Oumgoun'],
           ['name' => 'Imassine'],
           ['name' => 'Inezgane'],
           ['name' => 'Irherm'],
           ['name' => 'Kelaat-M\'Gouna'],
           ['name' => 'Lakhsas'],
           ['name' => 'Lakhsass'],
           ['name' => 'Lqliaa'],
           ['name' => 'M\'semrir'],
           ['name' => 'Massa (Maroc)'],
           ['name' => 'Megousse'],
           ['name' => 'Ouarzazate'],
           ['name' => 'Oulad Berhil'],
           ['name' => 'Oulad Teima'],
           ['name' => 'Sarghine'],
           ['name' => 'Sidi Ifni'],
           ['name' => 'Skoura'],
           ['name' => 'Tabounte'],
           ['name' => 'Tafraout'],
           ['name' => 'Taghzout'],
           ['name' => 'Tagzen'],
           ['name' => 'Taliouine'],
           ['name' => 'Tamegroute'],
           ['name' => 'Tamraght'],
           ['name' => 'Tanoumrite Nkob Zagora'],
           ['name' => 'Taourirt ait zaghar'],
           ['name' => 'Taroudannt'],
           ['name' => 'Temsia'],
           ['name' => 'Tifnit'],
           ['name' => 'Tisgdal'],
           ['name' => 'Tiznit'],
           ['name' => 'Toundoute'],
           ['name' => 'Zagora'],
           ['name' => 'Afourar'],
           ['name' => 'Aghbala'],
           ['name' => 'Azilal'],
           ['name' => 'Ait Majden'],
           ['name' => 'Beni Ayat'],
           ['name' => 'Beni Mellal'],
           ['name' => 'Bin elouidane'],
           ['name' => 'Bradia'],
           ['name' => 'Bzou'],
           ['name' => 'Dar Oulad Zidouh'],
           ['name' => 'Demnate'],
           ['name' => 'Dra\'a'],
           ['name' => 'El Ksiba'],
           ['name' => 'Foum Jamaa'],
           ['name' => 'Fquih Ben Salah'],
           ['name' => 'Kasba Tadla'],
           ['name' => 'Ouaouizeght'],
           ['name' => 'Oulad Ayad'],
           ['name' => 'Oulad M\'Barek'],
           ['name' => 'Oulad Yaich'],
           ['name' => 'Sidi Jaber'],
           ['name' => 'Souk Sebt Oulad Nemma'],
           ['name' => 'Zaouiat Cheikh'],
           ['name' => 'Tanger'],
           ['name' => 'Tetouan'],
           ['name' => 'Akchour'],
           ['name' => 'Assilah'],
           ['name' => 'Bab Berred'],
           ['name' => 'Bab Taza'],
           ['name' => 'Brikcha'],
           ['name' => 'Chefchaouen'],
           ['name' => 'Dar Bni Karrich'],
           ['name' => 'Dar Chaoui'],
           ['name' => 'Fnideq'],
           ['name' => 'Gueznaia'],
           ['name' => 'Jebha'],
           ['name' => 'Karia'],
           ['name' => 'Khemis Sahel'],
           ['name' => 'Ksar El Kebir'],
           ['name' => 'Larache'],
           ['name' => 'M\'diq'],
           ['name' => 'Martil'],
           ['name' => 'Moqrisset'],
           ['name' => 'Oued Laou'],
           ['name' => 'Oued Rmel'],
           ['name' => 'Ouazzane'],
           ['name' => 'Point Cires'],
           ['name' => 'Sidi Lyamani'],
           ['name' => 'Sidi Mohamed ben Abdallah el-Raisuni'],
           ['name' => 'Zinat'],
           ['name' => 'Ajdir'],
           ['name' => 'Aknoul'],
           ['name' => 'Al Hoceima'],
           ['name' => 'Ait Hichem'],
           ['name' => 'Bni Bouayach'],
           ['name' => 'Bni Hadifa'],
           ['name' => 'Ghafsai'],
           ['name' => 'Guercif'],
           ['name' => 'Imzouren'],
           ['name' => 'Inahnahen'],
           ['name' => 'Issaguen (Ketama)'],
           ['name' => 'Karia (El Jadida)'],
           ['name' => 'Karia Ba Mohamed'],
           ['name' => 'Oued Amlil'],
           ['name' => 'Oulad Zbair'],
           ['name' => 'Tahla'],
           ['name' => 'Tala Tazegwaght'],
           ['name' => 'Tamassint'],
           ['name' => 'Taounate'],
           ['name' => 'Targuist'],
           ['name' => 'Taza'],
           ['name' => 'Tainaste'],
           ['name' => 'Thar Es-Souk'],
           ['name' => 'Tissa'],
           ['name' => 'Tizi Ouasli'],
           ['name' => 'Laayoune'],
           ['name' => 'El Marsa'],
           ['name' => 'Tarfaya'],
           ['name' => 'Boujdour'],
           ['name' => 'Awsard'],
           ['name' => 'Oued-Eddahab'],
           ['name' => 'Stehat'],
           ['name' => 'Ait Attab']
        ];
        City::insert($cities);
    }
}
