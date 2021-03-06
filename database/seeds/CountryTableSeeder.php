<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        
        Country::create(['numeric_code'=>"020", 'name' => "Andorra", 'alpha2' => "AD", 'alpha3' => "AND"]);
        Country::create(['numeric_code'=>"784", 'name' => "United Arab Emirates", 'alpha2' => "AE", 'alpha3' => "ARE"]);
        Country::create(['numeric_code'=>"004", 'name' => "Afghanistan", 'alpha2' => "AF", 'alpha3' => "AFG"]);
        Country::create(['numeric_code'=>"028", 'name' => "Antigua and Barbuda", 'alpha2' => "AG", 'alpha3' => "ATG"]);
        Country::create(['numeric_code'=>"660", 'name' => "Anguilla", 'alpha2' => "AI", 'alpha3' => "AIA"]);   
        Country::create(['numeric_code'=>"008", 'name' => "Albania", 'alpha2' => "AL", 'alpha3' => "ALB"]);
        Country::create(['numeric_code'=>"051", 'name' => "Armenia", 'alpha2' => "AM", 'alpha3' => "ARM"]);
        Country::create(['numeric_code'=>"530", 'name' => "Nederlandse Antillen", 'alpha2' => "AN", 'alpha3' => "ANT"]);
        Country::create(['numeric_code'=>"024", 'name' => "Angola", 'alpha2' => "AO", 'alpha3' => "AGO"]);
        Country::create(['numeric_code'=>"010", 'name' => "Antarctica", 'alpha2' => "AQ", 'alpha3' => "ATA"]);
        Country::create(['numeric_code'=>"032", 'name' => "Argentina", 'alpha2' => "AR", 'alpha3' => "ARG", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"016", 'name' => "American Samoa", 'alpha2' => "AS", 'alpha3' => "ASM"]);
        Country::create(['numeric_code'=>"040", 'name' => "Austria", 'alpha2' => "AT", 'alpha3' => "AUT"]);
        Country::create(['numeric_code'=>"036", 'name' => "Australia", 'alpha2' => "AU", 'alpha3' => "AUS"]);
        Country::create(['numeric_code'=>"533", 'name' => "Aruba", 'alpha2' => "AW", 'alpha3' => "ABW"]);
        Country::create(['numeric_code'=>"248", 'name' => "Åland Islands", 'alpha2' => "AX", 'alpha3' => "ALA"]);
        Country::create(['numeric_code'=>"031", 'name' => "Azerbaijan", 'alpha2' => "AZ", 'alpha3' => "AZE"]);
        Country::create(['numeric_code'=>"070", 'name' => "Bosnia and Herzegovina", 'alpha2' => "BA", 'alpha3' => "BIH"]);
        Country::create(['numeric_code'=>"052", 'name' => "Barbados", 'alpha2' => "BB", 'alpha3' => "BRB"]);
        Country::create(['numeric_code'=>"050", 'name' => "Bangladesh", 'alpha2' => "BD", 'alpha3' => "BGD"]);
        Country::create(['numeric_code'=>"056", 'name' => "Belgium", 'alpha2' => "BE", 'alpha3' => "BEL"]);
        Country::create(['numeric_code'=>"854", 'name' => "Burkina Faso", 'alpha2' => "BF", 'alpha3' => "BFA"]);
        Country::create(['numeric_code'=>"100", 'name' => "Bulgaria", 'alpha2' => "BG", 'alpha3' => "BGR"]);
        Country::create(['numeric_code'=>"048", 'name' => "Bahrain", 'alpha2' => "BH", 'alpha3' => "BHR"]);
        Country::create(['numeric_code'=>"108", 'name' => "Burundi", 'alpha2' => "BI", 'alpha3' => "BDI"]);
        Country::create(['numeric_code'=>"204", 'name' => "Benin", 'alpha2' => "BJ", 'alpha3' => "BEN"]);
        Country::create(['numeric_code'=>"652", 'name' => "Saint Barth&eacute;lemy", 'alpha2' => "BL", 'alpha3' => "BLM"]);
        Country::create(['numeric_code'=>"060", 'name' => "Bermudas", 'alpha2' => "BM", 'alpha3' => "BMU"]);
        Country::create(['numeric_code'=>"096", 'name' => "Brunei Darussalam", 'alpha2' => "BN", 'alpha3' => "BRN"]);
        Country::create(['numeric_code'=>"068", 'name' => "Bolivia", 'alpha2' => "BO", 'alpha3' => "BOL", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"535", 'name' => "Bonaire, Sint Eustatius and Saba", 'alpha2' => "BQ", 'alpha3' => "BES"]);
        Country::create(['numeric_code'=>"076", 'name' => "Brazil", 'alpha2' => "BR", 'alpha3' => "BRA", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"044", 'name' => "Bahamas", 'alpha2' => "BS", 'alpha3' => "BHS"]);
        Country::create(['numeric_code'=>"064", 'name' => "Bhutan", 'alpha2' => "BT", 'alpha3' => "BTN"]);
        Country::create(['numeric_code'=>"074", 'name' => "Bouvet Island", 'alpha2' => "BV", 'alpha3' => "BVT"]);
        Country::create(['numeric_code'=>"072", 'name' => "Botswana", 'alpha2' => "BW", 'alpha3' => "BWA"]);
        Country::create(['numeric_code'=>"112", 'name' => "Belarus", 'alpha2' => "BY", 'alpha3' => "BLR"]);
        Country::create(['numeric_code'=>"084", 'name' => "Belize", 'alpha2' => "BZ", 'alpha3' => "BLZ"]);
        Country::create(['numeric_code'=>"124", 'name' => "Canada", 'alpha2' => "CA", 'alpha3' => "CAN"]);
        Country::create(['numeric_code'=>"166", 'name' => "Cocos Islands", 'alpha2' => "CC", 'alpha3' => "CCK"]);
        Country::create(['numeric_code'=>"180", 'name' => "The Democratic Republic of the Congo", 'alpha2' => "CD", 'alpha3' => "COD"]);
        Country::create(['numeric_code'=>"140", 'name' => "Central African Republic", 'alpha2' => "CF", 'alpha3' => "CAF"]);
        Country::create(['numeric_code'=>"178", 'name' => "Congo", 'alpha2' => "CG", 'alpha3' => "COG", ]);
        Country::create(['numeric_code'=>"756", 'name' => "Switzerland", 'alpha2' => "CH", 'alpha3' => "CHE"]);
        Country::create(['numeric_code'=>"384", 'name' => "Côte d'Ivoire", 'alpha2' => "CI", 'alpha3' => "CIV"]);
        Country::create(['numeric_code'=>"184", 'name' => "Cook Islands", 'alpha2' => "CK", 'alpha3' => "COK"]);
        Country::create(['numeric_code'=>"152", 'name' => "Chile", 'alpha2' => "CL", 'alpha3' => "CHL", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"120", 'name' => "Cameroon", 'alpha2' => "CM", 'alpha3' => "CMR"]);
        Country::create(['numeric_code'=>"156", 'name' => "China", 'alpha2' => "CN", 'alpha3' => "CHN"]);
        Country::create(['numeric_code'=>"170", 'name' => "Colombia", 'alpha2' => "CO", 'alpha3' => "COL", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"188", 'name' => "Costa Rica", 'alpha2' => "CR", 'alpha3' => "CRI", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"200", 'name' => "Czechoslovakia", 'alpha2' => "CS", 'alpha3' => "CSK"]);
        Country::create(['numeric_code'=>"128", 'name' => "Canton and Enderbury Islands", 'alpha2' => "CT", 'alpha3' => "CTE"]);
        Country::create(['numeric_code'=>"192", 'name' => "Cuba", 'alpha2' => "CU", 'alpha3' => "CUB", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"132", 'name' => "Cabo Verde", 'alpha2' => "CV", 'alpha3' => "CPV"]);
        Country::create(['numeric_code'=>"531", 'name' => "Curaçao", 'alpha2' => "CW", 'alpha3' => "CXR"]);
        Country::create(['numeric_code'=>"162", 'name' => "Christmas Island", 'alpha2' => "CX", 'alpha3' => "CXR"]);
        Country::create(['numeric_code'=>"196", 'name' => "Cyprus", 'alpha2' => "CY", 'alpha3' => "CYP"]);
        Country::create(['numeric_code'=>"203", 'name' => "Czech Republic", 'alpha2' => "CZ", 'alpha3' => "CZE"]);
        Country::create(['numeric_code'=>"276", 'name' => "Germany", 'alpha2' => "DE", 'alpha3' => "DEU"]);
        Country::create(['numeric_code'=>"262", 'name' => "Djibouti", 'alpha2' => "DJ", 'alpha3' => "DJI"]);
        Country::create(['numeric_code'=>"208", 'name' => "Denmark", 'alpha2' => "DK", 'alpha3' => "DNK"]);
        Country::create(['numeric_code'=>"212", 'name' => "Dominica", 'alpha2' => "DM", 'alpha3' => "DMA"]);
        Country::create(['numeric_code'=>"214", 'name' => "Dominican Republic", 'alpha2' => "DO", 'alpha3' => "DOM", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"012", 'name' => "Algeria", 'alpha2' => "DZ", 'alpha3' => "DZA"]);
        Country::create(['numeric_code'=>"218", 'name' => "Ecuador", 'alpha2' => "EC", 'alpha3' => "ECU", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"233", 'name' => "Estonia", 'alpha2' => "EE", 'alpha3' => "EST"]);
        Country::create(['numeric_code'=>"818", 'name' => "Egypt", 'alpha2' => "EG", 'alpha3' => "EGY"]);
        Country::create(['numeric_code'=>"732", 'name' => "Western Sahara", 'alpha2' => "EH", 'alpha3' => "ESH"]);
        Country::create(['numeric_code'=>"232", 'name' => "Eritrea", 'alpha2' => "ER", 'alpha3' => "ERI"]);
        Country::create(['numeric_code'=>"724", 'name' => "Spain", 'alpha2' => "ES", 'alpha3' => "ESP"]);
        Country::create(['numeric_code'=>"231", 'name' => "Ethiopia", 'alpha2' => "ET", 'alpha3' => "ETH"]);
        Country::create(['numeric_code'=>"246", 'name' => "Finland", 'alpha2' => "FI", 'alpha3' => "FIN"]);
        Country::create(['numeric_code'=>"242", 'name' => "Fiji", 'alpha2' => "FJ", 'alpha3' => "FJI"]);
        Country::create(['numeric_code'=>"238", 'name' => "Falkland Islands [Malvinas]", 'alpha2' => "FK", 'alpha3' => "KLK"]);
        Country::create(['numeric_code'=>"583", 'name' => "Micronesia", 'alpha2' => "FM", 'alpha3' => "FSM"]);
        Country::create(['numeric_code'=>"234", 'name' => "Faroe Island", 'alpha2' => "FO", 'alpha3' => "FRO"]);
        Country::create(['numeric_code'=>"250", 'name' => "France", 'alpha2' => "FR", 'alpha3' => "FRA"]);
        Country::create(['numeric_code'=>"266", 'name' => "Gabon", 'alpha2' => "GA", 'alpha3' => "GAB"]);
        Country::create(['numeric_code'=>"826", 'name' => "United Kingdom of Great Britain and Northern Ireland", 'alpha2' => "GB", 'alpha3' => "GBR"]);
        Country::create(['numeric_code'=>"308", 'name' => "Grenada", 'alpha2' => "GD", 'alpha3' => "GRD", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"268", 'name' => "Georgia", 'alpha2' => "GE", 'alpha3' => "GEO"]);
        Country::create(['numeric_code'=>"254", 'name' => "French Guiana", 'alpha2' => "GF", 'alpha3' => "GUF", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"831", 'name' => "Guernsey", 'alpha2' => "GG", 'alpha3' => "GGY"]);
        Country::create(['numeric_code'=>"288", 'name' => "Ghana", 'alpha2' => "GH", 'alpha3' => "GHA"]);
        Country::create(['numeric_code'=>"292", 'name' => "Gibraltar", 'alpha2' => "GI", 'alpha3' => "GIB"]);
        Country::create(['numeric_code'=>"304", 'name' => "Greenland", 'alpha2' => "GL", 'alpha3' => "GRL"]);
        Country::create(['numeric_code'=>"270", 'name' => "Gambia", 'alpha2' => "GM", 'alpha3' => "GMB"]);
        Country::create(['numeric_code'=>"324", 'name' => "Guinea", 'alpha2' => "GN", 'alpha3' => "GIN"]);
        Country::create(['numeric_code'=>"312", 'name' => "Guadeloupe", 'alpha2' => "GP", 'alpha3' => "GLP"]);
        Country::create(['numeric_code'=>"226", 'name' => "Equatorial Guinea", 'alpha2' => "GQ", 'alpha3' => "GNQ"]);
        Country::create(['numeric_code'=>"300", 'name' => "Greece", 'alpha2' => "GR", 'alpha3' => "GRC"]);
        Country::create(['numeric_code'=>"239", 'name' => "South Georgia and the South Sandwich Islands", 'alpha2' => "GS", 'alpha3' => "SGS"]);
        Country::create(['numeric_code'=>"320", 'name' => "Guatemala", 'alpha2' => "GT", 'alpha3' => "GTM", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"316", 'name' => "Guam", 'alpha2' => "GU", 'alpha3' => "GUM"]);
        Country::create(['numeric_code'=>"624", 'name' => "Guinea-Bissau", 'alpha2' => "GW", 'alpha3' => "GNB"]);
        Country::create(['numeric_code'=>"328", 'name' => "Guyana", 'alpha2' => "GY", 'alpha3' => "GUY", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"344", 'name' => "Hong Kong", 'alpha2' => "HK", 'alpha3' => "HKG"]);
        Country::create(['numeric_code'=>"334", 'name' => "Heard Island and McDonald Islands", 'alpha2' => "HM", 'alpha3' => "HMD"]);
        Country::create(['numeric_code'=>"340", 'name' => "Honduras", 'alpha2' => "HN", 'alpha3' => "HND", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"191", 'name' => "Croatia", 'alpha2' => "HR", 'alpha3' => "HRV"]);
        Country::create(['numeric_code'=>"332", 'name' => "Haiti", 'alpha2' => "HT", 'alpha3' => "HTI", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"348", 'name' => "Hungary", 'alpha2' => "HU", 'alpha3' => "HUN"]);       
        Country::create(['numeric_code'=>"360", 'name' => "Indonesia", 'alpha2' => "ID", 'alpha3' => "IDN"]);
        Country::create(['numeric_code'=>"372", 'name' => "Ireland", 'alpha2' => "IE", 'alpha3' => "IRL"]);
        Country::create(['numeric_code'=>"376", 'name' => "Israel", 'alpha2' => "IL", 'alpha3' => "ISR"]);
        Country::create(['numeric_code'=>"833", 'name' => "Isle of Man", 'alpha2' => "IM", 'alpha3' => "IMN"]);
        Country::create(['numeric_code'=>"356", 'name' => "India", 'alpha2' => "IN", 'alpha3' => "IND"]);
        Country::create(['numeric_code'=>"086", 'name' => "British Indian del Ocean Territory", 'alpha2' => "IO", 'alpha3' => "IOT"]);
        Country::create(['numeric_code'=>"368", 'name' => "Iraq", 'alpha2' => "IQ", 'alpha3' => "IRQ"]);
        Country::create(['numeric_code'=>"364", 'name' => "Iran", 'alpha2' => "IR", 'alpha3' => "IRN"]);
        Country::create(['numeric_code'=>"352", 'name' => "Iceland", 'alpha2' => "IS", 'alpha3' => "ISL"]);
        Country::create(['numeric_code'=>"380", 'name' => "Italy", 'alpha2' => "IT", 'alpha3' => "ITA"]);
        Country::create(['numeric_code'=>"832", 'name' => "Jersey", 'alpha2' => "JE", 'alpha3' => "JEY"]);
        Country::create(['numeric_code'=>"388", 'name' => "Jamaica", 'alpha2' => "JM", 'alpha3' => "JAM", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"400", 'name' => "Jordan", 'alpha2' => "JO", 'alpha3' => "JOR"]);
        Country::create(['numeric_code'=>"392", 'name' => "Japan", 'alpha2' => "JP", 'alpha3' => "JPN"]);
        Country::create(['numeric_code'=>"404", 'name' => "Kenya", 'alpha2' => "KE", 'alpha3' => "KEN"]);
        Country::create(['numeric_code'=>"417", 'name' => "Kyrgyzstan", 'alpha2' => "KG", 'alpha3' => "KGZ"]);
        Country::create(['numeric_code'=>"116", 'name' => "Cambodia", 'alpha2' => "KH", 'alpha3' => "KHM"]);
        Country::create(['numeric_code'=>"296", 'name' => "Kiribati", 'alpha2' => "KI", 'alpha3' => "KIR"]);
        Country::create(['numeric_code'=>"174", 'name' => "Comoros", 'alpha2' => "KM", 'alpha3' => "COM"]);
        Country::create(['numeric_code'=>"659", 'name' => "Saint Kitts and Nevis", 'alpha2' => "KN", 'alpha3' => "KNA"]);
        Country::create(['numeric_code'=>"408", 'name' => "Democratic People's Republic of Korea", 'alpha2' => "KP", 'alpha3' => "PRK"]);
        Country::create(['numeric_code'=>"410", 'name' => "Republic of Korea ", 'alpha2' => "KR", 'alpha3' => "KOR"]);
        Country::create(['numeric_code'=>"414", 'name' => "Kuwait", 'alpha2' => "KW", 'alpha3' => "KWT"]);
        Country::create(['numeric_code'=>"136", 'name' => "Cayman Island", 'alpha2' => "KY", 'alpha3' => "CYM"]);
        Country::create(['numeric_code'=>"398", 'name' => "Kazakhstan", 'alpha2' => "KZ", 'alpha3' => "KAZ"]);
        Country::create(['numeric_code'=>"418", 'name' => "Lao People's Democratic Republic", 'alpha2' => "LA", 'alpha3' => "LAO"]);
        Country::create(['numeric_code'=>"422", 'name' => "Lebanon", 'alpha2' => "LB", 'alpha3' => "LBN"]);
        Country::create(['numeric_code'=>"662", 'name' => "Saint Lucia", 'alpha2' => "LC", 'alpha3' => "LCA"]);
        Country::create(['numeric_code'=>"438", 'name' => "Liechtenstein", 'alpha2' => "LI", 'alpha3' => "LIE"]);
        Country::create(['numeric_code'=>"144", 'name' => "Sri Lanka", 'alpha2' => "LK", 'alpha3' => "LKA"]);
        Country::create(['numeric_code'=>"430", 'name' => "Liberia", 'alpha2' => "LR", 'alpha3' => "LBR"]);
        Country::create(['numeric_code'=>"426", 'name' => "Lesotho", 'alpha2' => "LS", 'alpha3' => "LSO"]);
        Country::create(['numeric_code'=>"440", 'name' => "Lithuania", 'alpha2' => "LT", 'alpha3' => "LTU"]);
        Country::create(['numeric_code'=>"442", 'name' => "Luxembourg", 'alpha2' => "LU", 'alpha3' => "LUX"]);
        Country::create(['numeric_code'=>"428", 'name' => "Latvia", 'alpha2' => "LV", 'alpha3' => "LVA"]);
        Country::create(['numeric_code'=>"434", 'name' => "Libya", 'alpha2' => "LY", 'alpha3' => "LBY"]);
        Country::create(['numeric_code'=>"504", 'name' => "Morocco", 'alpha2' => "MA", 'alpha3' => "MAR"]);
        Country::create(['numeric_code'=>"492", 'name' => "Monaco", 'alpha2' => "MC", 'alpha3' => "MCO"]);
        Country::create(['numeric_code'=>"498", 'name' => "Moldova", 'alpha2' => "MD", 'alpha3' => "MDA"]);
        Country::create(['numeric_code'=>"499", 'name' => "Montenegro", 'alpha2' => "ME", 'alpha3' => "MNE", ]);
        Country::create(['numeric_code'=>"450", 'name' => "Madagascar", 'alpha2' => "MG", 'alpha3' => "MDG"]);
        Country::create(['numeric_code'=>"584", 'name' => "Marshall Islands", 'alpha2' => "MH", 'alpha3' => "MHL"]);
        Country::create(['numeric_code'=>"807", 'name' => "Macedonia", 'alpha2' => "MK", 'alpha3' => "MKD"]);
        Country::create(['numeric_code'=>"466", 'name' => "Mali", 'alpha2' => "ML", 'alpha3' => "MLI"]);
        Country::create(['numeric_code'=>"104", 'name' => "Myanmar", 'alpha2' => "MM", 'alpha3' => "MMR"]);
        Country::create(['numeric_code'=>"496", 'name' => "Mongolia", 'alpha2' => "MN", 'alpha3' => "MNG"]);
        Country::create(['numeric_code'=>"446", 'name' => "Macao", 'alpha2' => "MO", 'alpha3' => "MAC"]);
        Country::create(['numeric_code'=>"474", 'name' => "Martinique", 'alpha2' => "MQ", 'alpha3' => "MTQ"]);
        Country::create(['numeric_code'=>"478", 'name' => "Mauritania", 'alpha2' => "MR", 'alpha3' => "MRT"]);
        Country::create(['numeric_code'=>"500", 'name' => "Montserrat", 'alpha2' => "MS", 'alpha3' => "MSR"]);
        Country::create(['numeric_code'=>"470", 'name' => "Malta", 'alpha2' => "MT", 'alpha3' => "MLT"]);
        Country::create(['numeric_code'=>"480", 'name' => "Mauritius", 'alpha2' => "MU", 'alpha3' => "MUS"]);
        Country::create(['numeric_code'=>"462", 'name' => "Maldives", 'alpha2' => "MV", 'alpha3' => "MDV"]);
        Country::create(['numeric_code'=>"454", 'name' => "Malawi", 'alpha2' => "MW", 'alpha3' => "MWI"]);
        Country::create(['numeric_code'=>"484", 'name' => "Mexico", 'alpha2' => "MX", 'alpha3' => "MEX", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"458", 'name' => "Malaysia", 'alpha2' => "MY", 'alpha3' => "MYS"]);
        Country::create(['numeric_code'=>"508", 'name' => "Mozambique", 'alpha2' => "MZ", 'alpha3' => "MOZ"]);
        Country::create(['numeric_code'=>"516", 'name' => "Namibia", 'alpha2' => "NA", 'alpha3' => "NAM"]);
        Country::create(['numeric_code'=>"540", 'name' => "New Caledonia", 'alpha2' => "NC", 'alpha3' => "NCL"]);
        Country::create(['numeric_code'=>"562", 'name' => "Niger", 'alpha2' => "NE", 'alpha3' => "NER"]);
        Country::create(['numeric_code'=>"574", 'name' => "Norfolk Island", 'alpha2' => "NF", 'alpha3' => "NFK"]);
        Country::create(['numeric_code'=>"566", 'name' => "Nigeria", 'alpha2' => "NG", 'alpha3' => "NGA"]);
        Country::create(['numeric_code'=>"558", 'name' => "Nicaragua", 'alpha2' => "NI", 'alpha3' => "NIC", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"528", 'name' => "Netherlands", 'alpha2' => "NL", 'alpha3' => "NLD"]);
        Country::create(['numeric_code'=>"578", 'name' => "Norway", 'alpha2' => "NO", 'alpha3' => "NOR"]);
        Country::create(['numeric_code'=>"524", 'name' => "Nepal", 'alpha2' => "NP", 'alpha3' => "NPL"]);
        Country::create(['numeric_code'=>"520", 'name' => "Nauru", 'alpha2' => "NR", 'alpha3' => "NRU"]);
        Country::create(['numeric_code'=>"570", 'name' => "Niue", 'alpha2' => "NU", 'alpha3' => "NIU"]);
        Country::create(['numeric_code'=>"554", 'name' => "New Zeand", 'alpha2' => "NZ", 'alpha3' => "NZL"]);
        Country::create(['numeric_code'=>"512", 'name' => "Oman", 'alpha2' => "OM", 'alpha3' => "OMN"]);
        Country::create(['numeric_code'=>"591", 'name' => "Panama", 'alpha2' => "PA", 'alpha3' => "PAN", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"604", 'name' => "Peru", 'alpha2' => "PE", 'alpha3' => "PER", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"258", 'name' => "French Polynesia", 'alpha2' => "PF", 'alpha3' => "PYF"]);
        Country::create(['numeric_code'=>"598", 'name' => "Papua New Guinea", 'alpha2' => "PG", 'alpha3' => "PNG"]);
        Country::create(['numeric_code'=>"608", 'name' => "Philippines", 'alpha2' => "PH", 'alpha3' => "PHL"]);
        Country::create(['numeric_code'=>"586", 'name' => "Pakistan", 'alpha2' => "PK", 'alpha3' => "PAK"]);
        Country::create(['numeric_code'=>"616", 'name' => "Poland", 'alpha2' => "PL", 'alpha3' => "POL"]);
        Country::create(['numeric_code'=>"666", 'name' => "Saint Pierre and Miquelon", 'alpha2' => "PM", 'alpha3' => "SPM"]);
        Country::create(['numeric_code'=>"612", 'name' => "Pitcairn", 'alpha2' => "PN", 'alpha3' => "PCN"]);
        Country::create(['numeric_code'=>"630", 'name' => "Puerto Rico", 'alpha2' => "PR", 'alpha3' => "PRI", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"275", 'name' => "Palestine", 'alpha2' => "PS", 'alpha3' => "PSE"]);
        Country::create(['numeric_code'=>"620", 'name' => "Portugal", 'alpha2' => "PT", 'alpha3' => "PRT"]);
        Country::create(['numeric_code'=>"585", 'name' => "Palau", 'alpha2' => "PW", 'alpha3' => "PLW"]);
        Country::create(['numeric_code'=>"600", 'name' => "Paraguay", 'alpha2' => "PY", 'alpha3' => "PRY", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"634", 'name' => "Qatar", 'alpha2' => "QA", 'alpha3' => "QAT"]);
        Country::create(['numeric_code'=>"638", 'name' => "Reuni&oacute;n", 'alpha2' => "RE", 'alpha3' => "REU"]);
        Country::create(['numeric_code'=>"642", 'name' => "Romania", 'alpha2' => "RO", 'alpha3' => "ROU"]);
        Country::create(['numeric_code'=>"688", 'name' => "Serbia", 'alpha2' => "RS", 'alpha3' => "SRB"]);
        Country::create(['numeric_code'=>"643", 'name' => "Russian", 'alpha2' => "RU", 'alpha3' => "RUS"]);
        Country::create(['numeric_code'=>"646", 'name' => "Rwanda", 'alpha2' => "RW", 'alpha3' => "RWA"]);
        Country::create(['numeric_code'=>"682", 'name' => "Saudi Arabia", 'alpha2' => "SA", 'alpha3' => "SAU"]);
        Country::create(['numeric_code'=>"090", 'name' => "Solomon Islands", 'alpha2' => "SB", 'alpha3' => "SLB"]);
        Country::create(['numeric_code'=>"690", 'name' => "Seychelles", 'alpha2' => "SC", 'alpha3' => "SYC"]);
        Country::create(['numeric_code'=>"736", 'name' => "Sudan", 'alpha2' => "SD", 'alpha3' => "SDN"]);
        Country::create(['numeric_code'=>"752", 'name' => "Sweden", 'alpha2' => "SE", 'alpha3' => "SWE"]);
        Country::create(['numeric_code'=>"702", 'name' => "Singapore", 'alpha2' => "SG", 'alpha3' => "SGP"]);
        Country::create(['numeric_code'=>"654", 'name' => "Saint Elena", 'alpha2' => "SH", 'alpha3' => "SHN"]);
        Country::create(['numeric_code'=>"705", 'name' => "Slovenia", 'alpha2' => "SI", 'alpha3' => "SVN"]);
        Country::create(['numeric_code'=>"744", 'name' => "Svalbard Island and Jan Mayen", 'alpha2' => "SJ", 'alpha3' => "SJM"]);
        Country::create(['numeric_code'=>"703", 'name' => "Slovakia", 'alpha2' => "SK", 'alpha3' => "SVK"]);
        Country::create(['numeric_code'=>"694", 'name' => "Sierra Leone", 'alpha2' => "SL", 'alpha3' => "SLE"]);
        Country::create(['numeric_code'=>"674", 'name' => "San Marino", 'alpha2' => "SM", 'alpha3' => "SMR"]);
        Country::create(['numeric_code'=>"686", 'name' => "Senegal", 'alpha2' => "SN", 'alpha3' => "SEN"]);
        Country::create(['numeric_code'=>"706", 'name' => "Somalia", 'alpha2' => "SO", 'alpha3' => "SOM"]);
        Country::create(['numeric_code'=>"740", 'name' => "Suriname", 'alpha2' => "SM", 'alpha3' => "SUR", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"678", 'name' => "Sao Tome and Principe", 'alpha2' => "ST", 'alpha3' => "STP"]);
        Country::create(['numeric_code'=>"222", 'name' => "El Salvador", 'alpha2' => "SV", 'alpha3' => "SLV", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"760", 'name' => "Syrian", 'alpha2' => "SY", 'alpha3' => "SYR"]);
        Country::create(['numeric_code'=>"748", 'name' => "Swaziland", 'alpha2' => "SZ", 'alpha3' => "SWZ"]);
        Country::create(['numeric_code'=>"796", 'name' => "Turks and Caicos Islands", 'alpha2' => "TC", 'alpha3' => "TCA"]);
        Country::create(['numeric_code'=>"148", 'name' => "Chad", 'alpha2' => "TD", 'alpha3' => "TCD"]);
        Country::create(['numeric_code'=>"260", 'name' => "French Southern Territories", 'alpha2' => "TF", 'alpha3' => "ATF"]);
        Country::create(['numeric_code'=>"768", 'name' => "Togo", 'alpha2' => "TG", 'alpha3' => "TGO"]);
        Country::create(['numeric_code'=>"764", 'name' => "Thailand", 'alpha2' => "TH", 'alpha3' => "THA"]);
        Country::create(['numeric_code'=>"762", 'name' => "Tajikistan", 'alpha2' => "TJ", 'alpha3' => "TJK"]);
        Country::create(['numeric_code'=>"772", 'name' => "Tokelau", 'alpha2' => "TK", 'alpha3' => "TKL"]);
        Country::create(['numeric_code'=>"626", 'name' => "Timor-Leste", 'alpha2' => "TL", 'alpha3' => "TLS"]);
        Country::create(['numeric_code'=>"795", 'name' => "Turkmenistan", 'alpha2' => "TM", 'alpha3' => "TKM"]);
        Country::create(['numeric_code'=>"788", 'name' => "Tunisia", 'alpha2' => "TN", 'alpha3' => "TUN"]);
        Country::create(['numeric_code'=>"776", 'name' => "Tonga", 'alpha2' => "TO", 'alpha3' => "TON"]);
        Country::create(['numeric_code'=>"792", 'name' => "Turkey", 'alpha2' => "TR", 'alpha3' => "TUR"]);
        Country::create(['numeric_code'=>"780", 'name' => "Trinidad and Tobago", 'alpha2' => "TT", 'alpha3' => "TTO"]);
        Country::create(['numeric_code'=>"798", 'name' => "Tuvalu", 'alpha2' => "TV", 'alpha3' => "TUV"]);
        Country::create(['numeric_code'=>"158", 'name' => "Taiwan", 'alpha2' => "TW", 'alpha3' => "TWN"]);
        Country::create(['numeric_code'=>"834", 'name' => "Tanzania", 'alpha2' => "TZ", 'alpha3' => "TZA"]);
        Country::create(['numeric_code'=>"804", 'name' => "Ukraine", 'alpha2' => "UA", 'alpha3' => "UKR"]);
        Country::create(['numeric_code'=>"800", 'name' => "Uganda", 'alpha2' => "UG", 'alpha3' => "UGA"]);
        Country::create(['numeric_code'=>"840", 'name' => "United States of America", 'alpha2' => "US", 'alpha3' => "USA"]);
        Country::create(['numeric_code'=>"858", 'name' => "Uruguay", 'alpha2' => "UY", 'alpha3' => "URY", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"860", 'name' => "Uzbekistan", 'alpha2' => "UZ", 'alpha3' => "UZB"]);
        Country::create(['numeric_code'=>"336", 'name' => "Holy See", 'alpha2' => "VA", 'alpha3' => "VAT"]);
        Country::create(['numeric_code'=>"670", 'name' => "Saint Vicent and the Grenadines", 'alpha2' => "VC", 'alpha3' => "VCT"]);
        Country::create(['numeric_code'=>"862", 'name' => "Venezuela", 'alpha2' => "VE", 'alpha3' => "VEN", 'continent'=>"latam"]);
        Country::create(['numeric_code'=>"092", 'name' => "Virgin Islands (British)", 'alpha2' => "VG", 'alpha3' => "VGN"]);
        Country::create(['numeric_code'=>"850", 'name' => "Virgin Islands (U.S.A)", 'alpha2' => "VI", 'alpha3' => "VIR"]);
        Country::create(['numeric_code'=>"704", 'name' => "Viet Nam", 'alpha2' => "VN", 'alpha3' => "VNM"]);
        Country::create(['numeric_code'=>"548", 'name' => "Vanuatu", 'alpha2' => "VU", 'alpha3' => "VUT"]);
        Country::create(['numeric_code'=>"876", 'name' => "Wallis and Futuna", 'alpha2' => "WF", 'alpha3' => "WLF"]);
        Country::create(['numeric_code'=>"882", 'name' => "Samoa", 'alpha2' => "WS", 'alpha3' => "WSM"]);
        Country::create(['numeric_code'=>"887", 'name' => "Yemen", 'alpha2' => "YE", 'alpha3' => "YEM"]);
        Country::create(['numeric_code'=>"175", 'name' => "Mayotte", 'alpha2' => "YT", 'alpha3' => "MYT"]);
        Country::create(['numeric_code'=>"710", 'name' => "South Africa", 'alpha2' => "ZA", 'alpha3' => "ZAF"]);

    }
}
