-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2019 at 06:16 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `first_name`, `last_name`, `contact_no`, `username`, `password`, `created_at`) VALUES
(1, 'Akna', 'Lakmini', 702222222, 'lakminakna', 'akna', '2019-11-12 10:12:32'),
(2, 'Sahan', 'Madusanka', 705555555, 'sahan', 'sahan', '2019-11-12 10:15:22'),
(3, 'keshani', 'perera', 703333333, 'keshani', 'keshani', '2019-11-12 10:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Sri Lanka'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `created_at`, `updated_at`, `first_name`, `last_name`, `email`, `job_title`, `city`, `country`) VALUES
(1, '2019-09-25 21:33:49', '2019-10-03 21:16:50', 'akna', 'lakmini', 'akna@gmail.com', '/', '/', '/'),
(2, '2019-10-03 21:16:20', '2019-10-03 21:16:20', 'Sahan', 'Madusanka', 'sahan@gmail.com', 'se', 'colombo', 'sri lanka');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `address` varchar(250) NOT NULL,
  `licence_id` varchar(20) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` blob,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `first_name`, `last_name`, `gender`, `contact_no`, `address`, `licence_id`, `nic`, `email`, `image`, `username`, `password`, `created_at`) VALUES
(1, 'supun', 'supun', 'Male', 711124578, 'Maharagama', '2323', '232323456v', 'supun@gmail.com', 0xffd8ffe000104a46494600010100000100010000ffdb008400090607080706090807080a0a090b0d160f0d0c0c0d1b14151016201d2222201d1f1f2428342c242631271f1f2d3d2d3135373a3a3a231f3f443f2c433d392e37010a0a0a0d0c0d1b0f101a37251f2537372d373732372b3735322f34342b352b372d382d372d2b372f372b2d2b352d2b2b2c2b382d2b2d2b2b2b2b2d382d2b2b2bffc00011080030003003012200021101031101ffc4001a000002030101000000000000000000000004060305070201ffc4002e10000201030205020309000000000000000102030004110521061213315141611491a1152232435253717282ffc4001801000301010000000000000000000000000102030400ffc4001c1100030003000300000000000000000000000111020331122122ffda000c03010002110311003f00cf635a2152a38bb57b2c9ca08ce290a024d7f890a46a7941c73019ae12e5d77ea061eaae3069ab8160b3e9afc6747aacc76948f3e0d31711e9ba218a411436ab3b293f7080c4d4ded49c85f1d371b4412032861d8ef4348bbd116cb8b58ffae6a390555103a538142ddc8429c77a9c1c2d496da2ea5ab362c2d249149c7531841fe8ed5c80cbad13eccb8b2b899e35768d9fa4a47e2c9240c1f5abbd40e9d25a4b7c630275040e65e5276d891dfe74a12699a970e4bd2ba8ba88e016550483fc79c5585a5b5eebb225bdac2605760b961b93e4fb0a86587d74d58ec5e3cf60b7f324f7734916f196c29f206d9fa50329ab1bfd1f51d33996eed64555fcc51cc9f3155721ab250cedd7466e02b6b39ee5a7ba557756c461bb0dbbd68e9ca00e5dab1ce1ebf7b287aebb8463cd8f15a6693a92dddac72020123380734cd0117924705c47d3b88a3917f4ba822bab78aded90adb431440feda019a084d5d89bde960f4265e46ef485c7fa558c767f196c8b15c2300e1060383b6fefef4e13dcaa233310001eb59e7166a66e6d656caf4dc811e36c8f23cf6a28567fffd9, 'supun', 'supun', '2019-11-12 10:37:35'),
(2, 'madhura', 'madhura', 'Male', 705555555, 'Pannipitiya', '55792', '459826776v', 'madhura@gmail.com', 0xffd8ffe000104a46494600010100000100010000ffdb008400090607131012101410131516151618181a1818151716161618181818171818171718181d282c181d251b151721312125292b2e2e2e17203338332c37282d2e2b010a0a0a0e0d0e1810101a2d251d252d2d2d2d2b2d2b2d2d2d2d2d2d2d2d2d2d2d372b2d2d2d372d2d2d2d2d2d2d2d2d2d2d2d2b37372d2d2d372d372b2d2b2b37ffc00011080080008003012200021101031101ffc4001c0000020203010100000000000000000000050601040002030708ffc40040100001030204030504040c0700000000000100021103210405123141517106226181c11391a1b10732b2f01415233342526272a2d1e1f134436373828392ffc400190100030101010000000000000000000000020304000105ffc4002111000202020300020300000000000000000001021103310412212241133251ffda000c03010002110311003f00f7158a14158c287d25f69ce030c453fced596b6f05820cd41e20c47890be7fc2d32f2e739c6ee37e27c4a71fa47aeec4636b9a8e3a693cb1a39061e11c756add0fc8b2b6d576c43678f18e091df63e10b048c9c9020cc995799943b49d2381f904f3472a102071da15b194482d10277207084994eca961a3ced99759a5c0c83c4740b7c7e0beab7f6676e2411f209eb119143001274ec40b9f0284e3f2a27498368f2227e5287b04f1b125f81ef9368dae38f05230866fbd826fa59546e0dbed6d3e7bab14b257562240001b9847dc1fc4201cb4f0dfa2dbf15120cb785ed7881b2f47ab9196812011cf8ad71195b4b4900831681d16fcace3c09fd1e7583c3e92c736ce6bbb8e03bc1c2ed07c38af79fa37ed51cc283857d22b537697007eb0b43c8e7320f885e439b6034386f7b88e732aefd1de2cd0cc291e2fa819cacf201eb7329d8e564992147d0614a80a538510a1ca54382e331f3976a715aebd770fd3aaf74f839ce23e051becc34060b70b75809573c2463716cbc33115182f6eebf4fa26decd52b0df7f842965691771f635e147bfd114a54ac87e1472fbd914a4fdba24a2c99bb29400a4d069dda0f842ebaadb2d49e4994855b2a55cba9907bb1e8b4a7830d6c0b2b84ae4f2b8d1db655ab4242a18aa30d28ab8caa58a36296c38b6247681b2ce87ee12fe08e8aac7f10e69e97dfe099fb414ce9e57df978a51a226a005d00387c1c0ca7e2d91e747d2b80adae9527efa98d3ef00faab0aa65347d9d0a0cdf4d3637dcd03d15b559110a0ac2a8e3735a345c1b51e038898b931ccc6c171ba4649bd1e01da2c13999a6318e1135dee1ff63fda077b9e026ecab0becc37a7a2abf4a14c0ccf0f51a469a94e999e65b51e0ff0e957f58112605a785bd54b94f438cbfa1aa0f1015da052f3338a2200d46049310236f358ced9e0da40d6445aed3052522994950dcd71e3f7b2d90bc1e7f42ac7b3a8d71e40dd11a55414c542887ae4e982bb54a8021d9866d468b49a8f0d1e3fc971b091b547c725471756c506abdb1c392431afa847ea88f9eeb8e233f9048a3560f02c23c77e281a09491d312c0f17b8f5fec95e8e007e30c35317d4fa63c9cf84c34b12da825b3e20883c10bc2e29accce93ea07114c830db925b240f0de13b178c9f3fc9787bdb54a5fecc67353142a1aac0c83dd0d93dd3b077ed23c1549d904a2e2e9984a49ed4d21f85b4cc1d0d13e12f29dd2b76af09f94a75277ee7fcbbc5bea93c8fd3c28e23acbe881db6cadae636a06c54639a4906c69937f4561d4b506db834f9a2199e5e5facb8930c75a6d0082b7c05369898e0a4ece8b9c52981330c4bda5ad653692605c4dcf08f2dd08cf28d6a7528b2ab455f6858406d3b375cc99e3a6c13f6272a6bb80dec46e3c56f4b0ae882e98d890096f88e48e124b681c98fb698a8deca9a4ea7101c5ad3ddb0048d88dd3164559cd3a2a70856df4f402f71d4ee642a5449d63ac942dfa3210f885338a9a185c39247392bb1751a1c6038c7918992761d137e72e96143b074f55b86eb7dd99c6d50b3f8aab52c5fe0ec6bc32770cb4ea0016b8ee34dfaabb56954a15dcd0f73a9ea201264c0e638724d0ea750d83cf2b1baad432c0d249b93f24729dad098e2a7eb05d4a51de3b9f921b85a4198a73dc4096b409e65c4266ccd80081c906ad87692c79170e03df250a9781f55d87bec4986556f27033d5a07a2674b9d89a1a68131f59dc790007a26356e3f228f3b3bbc8d98a966b86f6b49ed89744b7c1c3ea9f230aea828a5a149b4ec4334dc412010634b81e445fd10dcbaa4403b8107a8b14cb9ae0df4ea3cb58f731e67b9721c664472f14a20e8ad51ae0e6f7c901e34d9d716f3503835e33d55914a9a19e9d49016c42a78676a015ad9703a2be61f54ee866123509d95dc6bce933c954c2b85ae276437e8d8e8b79b096f821d979ba259811a7741f0f521d6364460f53bad9c1698776ca710ff00bf82e314f60ccc6a2a382a5ae4f1d443478da0fc574cc5f73fdfca3c933f67fb30d028d57bcb8101e1b01a039ddebf3894cc706c564c8a1763265987f674a930eed6807ac5fe2ada80a55a91e6b7662c58b174e1052076e691662e93ff0045f4b4f9b1c4fc9e9fd2cf6fb0e5d876bc7f9751ae3fba65a7ed03e497955a0f1ba920160aa6df7b2b9ed20c4cf241f095620782b387a85ce2015033d6459af7b73111cd086e5b73a406c5e62e88e2b194d967384cdee3c557fc6cd8eee900732261710c49bd14b1994d5a8d3aaa120f01ddf29e2bae5d8014c01b459757e78d00f783473257019e52992e6c5b63d78223746b6172ed202d6a5691c173355952987d3748fe8a932a985c1523962985f518c1bb9c07bcdbd57a950a61ad6b46c0003cacbcebb3987f6b8ba5370d25ff00f9dbf8a17a4ab70aa8d9e7721dcc958b1627083162c58b18843bb44cd585c48ff49ff64a22551cebfc3e23fdb7fd92865a6756d1e5f86ab2070bc144302f83e683622996c386c77f03cfd15ca75222fba825e9ea45fa5bcc72aa754ead0d278dae55219551681ae9ec3922945c4ef757c6101174b4ca54fa8b6ec2503f55b78b594d3cb5a4825a044700985b82682642e789a406df708ad9a597b23855700c03a21756aff45731063eb142f14f9b377e1fcca28a279b0f7616a4e2dfcbd9b879cb4fc97a205e5394634e11e1ec66b20105b305d3bc1e06c2e9c72aedae16b35a5ce349c6c5b504697f16c8b183c55789aaa20ce9a7633ac5ce9550e00b4820f104107cc2dd38412ab6331b4e889aaf6b46fde207b87148b98f6b6bd4914e290f0ef3fdfc3c900a80976a792e36bb89719ea572cc38e69db66b07e4293aa3890d6ea3a1a4998b9e1e28162735c5559f6b5a01176521a58277126eeebc50d65dcd9fd61f1eefaab78a6c7cfe0a5cd26a457c7845c6dec80c046922d1d247242715aa89b5d84cfeef546a8dc5d698ac3870d924aa4bece797e3c46ffd4f245e96611631b73f7a50ad9739a49a6e8becedba8e4aad7c5d769fcdec6dde9d5e30b51cee39331f24ea9e3d7cb9aab88c74976e7e164a8cc7e278307536ea177a6cc455fd568b1de7645d41ee5ccc333986ee4ec078f0f82e984a477703a88f70e4b4c360453748bb8ee4db7e488329c2cfc32f4e6f943ddbba06e418f2128ad46f0439c249ea8f1ec5f22ba938173e999a6f7b0f02c7111e499b2ded7621902a06d51c67baf88e045bde82e1296dd5583420f5955101ffd9, 'madhura', 'madhura', '2019-11-12 10:36:25'),
(3, 'malee', 'malee', 'Female', 703333333, 'Kottawa', '55792', '124578964v', 'malee@gmail.com', 0xffd8ffe000104a46494600010100000100010000ffdb0084000906071110101512121216161016151817181515181215151515171a161a19131515181f2820181a251b151525312125292b2e2e2e171f3338332c3728392e2b010a0a0a0d0d0d0e0d0d0e2d1915192d2d372b2d372b2b2b2b2d372b37372b372d372b372b2b372d2d2b2d372b2b372d2b2d2b2b372b2d2b2d2b2b2d2b372b2b2dffc00011080060006003012200021101031101ffc4001c0000030003010101000000000000000000050607020304010008ffc400351000010302040405010607010000000000010002030411051221310641516122718191b1c107133252d1f02442637382a1b243ffc4001501010100000000000000000000000000000001ffc40014110100000000000000000000000000000000ffda000c03010002110311003f00882f97abc511f2ce30b04538770e754d4471345cbde1bee5053b84e56e13859ad940334d71030f6d339ec3eaa6d89e2b24d2ba595c5f2b8dee533fda6624d75408233fc3d3b44318e566685de65d7d5223dd72aaba627e63771f75b0b983b9efb2e26adcd6128371ab772d160093b959c7013c96c7c046e83385e42ca792e56acda2c094038af16c7b561641e2a07d95442335356eff00c21393fb8ff0b7e520593df09c99682460de47e627b30683defec81631a9cb9faefcfcf728700ba3107de575bad96ca3a6cc7e8830a5a72e3a04c745819205d12e1ec363b8cda3fa72f4ea9ca1c3da10268c1c346cb86ba8743a2a1c948db2135d431107c6dbf9a099c8c216011ec668329246c7e50422c831c6681f04858f1670fddc21ea89f6994172251bb4e53e476ff7f2a7ae08314d5824e19412bafe2b96b7b0f0dffed2ad91aa77ff0000f1fd4f9c9fa201d87d399a66b7a94e941c39909ccdcc08d0f4ee96b84997aa6faab66174f768d1026d26092464100e5f436efa273c3a91cf833f65b312696b7b9d117869dd152b5b6dc2045c5aed3e224f401099a50c36745f5dd51aa7096bd81ce6ebee84d5f0c87ecf03dee827d8896bda728db54af3b2c555a6c12289a45ae6db9531c562c8f70e84a0a0718d117d348fdc65f8d7e8a4b30b2acf11c8db64b5ee6c1a49cb727a5d2af1df0e329991cd11f03ce5737935f6bd876fd10262eea590982560daed77b1b7d5712e8a39b293dda47ba0db81d4fdd5446fe57b1f23a2bef0fced7302fcf2e6d8faaacf06e279e9c58f8dba11f540e956049551c4480dd0f9a67c62c3281c8253a37b2ac0bb835e0e8e06ce05116e0b2b8932cef75b623c3a7a20230b83d9ea874fa5d75e4644ccad274ebb928457ce083aa0058b546a4298f106b23fcd5131392d73753aaf76673bb9280952d4baaa725e48736373da1b6fc600b5efcb5d902c6b169a68db1bdde16926dd5c7771eebca5c51d0ccd7b77b1bff97ec2e7c423f1badb5ca01cb26ad8622bc11941d5200e68773d01f4d2ff0008d70c62061783fca7423b207146511a18084147a58f5ce01ca75bb7708d475eeb693c80f43642f826b1a181b2723604fc2a044f80b6f66dfd102e44c965fc4f711e802d188e5885b35d746318b323bea12bcd5424399ef01bd2f771f6d9070e292ba5f0b76e6529ba2f11f34e73e27131a431a5ce3a740b9b02c05d3bccb278583c56b6aeb6f6ec826900cd237bb82392c1727cd0cc198d353187fe1ce2eae0ce19a193574645ff0029b208dba9d6bfb85716700618f17fbc91b6dc1737f44bd8c6018553b8358f91eef36e5f23a209fd1e1b23ff000b1c7c8128b5061523dc18d6173ff2b45cfb04d33e246568a681a238bf9b28b17799553e13c361a5a7686019c8bb9dcc9e9e48276fe163152c6c9416cae25c4736df6056a6e0b50080d99d9399beddac9fb88a2cfe2e8421a1a2c815a4e16693774ae24f60ba20e14a707c45e7d40f808d4950d1a2c1b2b7741c13e031305a2600eea753ee571ba76b237b5aeb3890d693ad982fb5bb93eeb6711e20447945f33b4bea001cf549751559011727a7920fffd9, 'malee', 'malee', '2019-11-12 10:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landowners`
--

CREATE TABLE `landowners` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact_no` int(10) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_of_lands` int(2) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landowners`
--

INSERT INTO `landowners` (`id`, `first_name`, `last_name`, `gender`, `contact_no`, `nic`, `email`, `no_of_lands`, `username`, `password`, `created_at`) VALUES
(1, 'saman', 'saman', 'Male', 715555555, '214578994v', 'saman@gmail.com', 3, 'saman', 'saman', '2019-11-12 10:18:16'),
(2, 'waruni', 'waruni', 'Female', 712222888, '124578964v', 'waruni@gmail.com', 1, 'waruni', 'waruni', '2019-11-12 10:19:27'),
(3, 'mahela', 'mahela', 'Male', 705555555, '214578994v', 'mahela@gmail.com', 2, 'mahela', 'mahela', '2019-11-12 10:20:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(20, '2014_10_12_000000_create_users_table', 1),
(21, '2014_10_12_100000_create_password_resets_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_09_14_082315_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parking_spaces`
--

CREATE TABLE `parking_spaces` (
  `id` int(11) NOT NULL,
  `landowner_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(250) NOT NULL,
  `image` blob,
  `open_from` time NOT NULL,
  `open_till` time NOT NULL,
  `open_status` varchar(20) NOT NULL,
  `reservation_status` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_spaces`
--

INSERT INTO `parking_spaces` (`id`, `landowner_id`, `admin_id`, `name`, `address`, `image`, `open_from`, `open_till`, `open_status`, `reservation_status`, `created_at`) VALUES
(1, 1, 1, 'Marino mall', 'pettah', '', '07:00:00', '17:00:00', '1', '1', '2019-11-12 11:19:23'),
(2, 2, 3, 'kelaniya', 'kelaniya', NULL, '07:00:00', '17:00:00', '0', '1', '2019-11-12 16:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `parking_vehicle_types`
--

CREATE TABLE `parking_vehicle_types` (
  `parking_space_id` int(11) NOT NULL,
  `vehicle_type` varchar(150) NOT NULL,
  `total_no_of_vehicles` int(11) NOT NULL,
  `no_of_vehicles_parked` int(11) DEFAULT NULL,
  `amount_per_hour` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sahannett@gmail.com', '$2y$10$4p8MJAQ08IeSIMPpgLKIruaEtsiWooONEDI6bswrVQwhKEe4zTmfe', '2019-09-25 21:52:53');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `parking_space_id` int(11) NOT NULL,
  `duration_from` time NOT NULL,
  `duration_to` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Vehicle_type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `driver_id`, `parking_space_id`, `duration_from`, `duration_to`, `created_at`, `Vehicle_type`) VALUES
(1, 1, 1, '04:00:00', '17:00:00', '2019-11-12 08:00:22', ''),
(2, 3, 1, '22:00:00', '28:00:00', '2019-11-12 16:58:45', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `parking_space_id` int(11) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sahan madusanka', 'sahannett@gmail.com', NULL, '$2y$10$qBlcuHWk.1JV3wqVjvto2.l5.z1LliuEMaI0h5W/8wgTsR3ati0si', NULL, '2019-09-25 21:43:47', '2019-09-25 21:43:47'),
(2, 'Sahan', 'sahan@gmail.com', NULL, '$2y$10$2rjEIXYaptQXroU28ZO5buaGuw5g9q6hQaUoQv36UZCVjYSmlgzQ2', NULL, '2019-10-03 21:15:17', '2019-10-03 21:15:17');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `vehicle_no` varchar(7) NOT NULL,
  `type` varchar(100) NOT NULL,
  `colour` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `driver_id`, `vehicle_no`, `type`, `colour`, `created_at`) VALUES
(1, 2, 'GH6754', 'toyata', 'white', '2019-11-12 17:02:16'),
(2, 1, 'BV4579', 'BMW', 'black', '2019-11-12 17:02:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landowners`
--
ALTER TABLE `landowners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parking_spaces`
--
ALTER TABLE `parking_spaces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parking_space_landowner` (`landowner_id`),
  ADD KEY `parking_space_admin` (`admin_id`);

--
-- Indexes for table `parking_vehicle_types`
--
ALTER TABLE `parking_vehicle_types`
  ADD PRIMARY KEY (`parking_space_id`,`vehicle_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_driver` (`driver_id`),
  ADD KEY `reservation_parking_space` (`parking_space_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_driver` (`driver_id`),
  ADD KEY `reviws_parking_space` (`parking_space_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vehicle_owner` (`driver_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landowners`
--
ALTER TABLE `landowners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `parking_spaces`
--
ALTER TABLE `parking_spaces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parking_spaces`
--
ALTER TABLE `parking_spaces`
  ADD CONSTRAINT `parking_space_admin` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `parking_space_landowner` FOREIGN KEY (`landowner_id`) REFERENCES `landowners` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `parking_vehicle_types`
--
ALTER TABLE `parking_vehicle_types`
  ADD CONSTRAINT `parking_space_type` FOREIGN KEY (`parking_space_id`) REFERENCES `parking_spaces` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservation_driver` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_parking_space` FOREIGN KEY (`parking_space_id`) REFERENCES `parking_spaces` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_vehicle` FOREIGN KEY (`id`) REFERENCES `vehicles` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_driver` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `reviws_parking_space` FOREIGN KEY (`parking_space_id`) REFERENCES `parking_spaces` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD CONSTRAINT `vehicle_owner` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
