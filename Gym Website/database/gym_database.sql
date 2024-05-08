-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2024 at 08:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `title`, `description`) VALUES
(64, 'About Us', 'Welcome to A.k.Gym, where fitness meets excellence. Our dedicated team of fitness professionals is committed to helping you achieve your health and wellness goals. Whether you\'re a beginner or an experienced fitness enthusiast, we have the resources and expertise to guide you on your fitness journey.\r\nAt A.k.Gym, we believe in creating a supportive and motivating environment for our members. Our state-of-the-art facilities, expert trainers, and diverse range of fitness classes make us the perfect choice for anyone looking to lead a healthier lifestyle.\r\nJoin us today and take the first step towards a fitter, healthier you!'),
(65, 'Gallery', 'Explore our gym\'s vibrant atmosphere and facilities through our gallery of images.Our gallery showcases the dynamic environment at A.k.Gym. From workout areas to group classes, see why our members love being part of our fitness community.'),
(66, 'Video Tour', 'Take a virtual tour of A.k.Gym to get a closer look at our facilities and classes.While we don\'t have a video tour available at the moment, we invite you to visit our gym in person to experience the atmosphere and facilities firsthand. Our team is ready to welcome you!'),
(67, 'Our Equipment', 'A.k.Gym is equipped with the latest fitness technology to enhance your workout experience.We take pride in offering a wide range of modern workout equipment, including cardio machines, strength training equipment, and more. Our goal is to provide you with the tools you need to achieve your fitness goals.'),
(68, 'Exercise Programs', 'Discover a variety of exercise programs tailored to different fitness levels and goals.At A.k.Gym, we offer a diverse range of exercise programs to cater to your specific needs. Whether you\'re looking to build strength, improve endurance, or enhance flexibility, our experienced trainers will guide you through engaging and effective workouts.Some of our popular exercise programs include weight training for strength, cardiovascular workouts for endurance, flexibility and mobility exercises, and specialized classes like CrossFit and Pilates.'),
(69, 'Diet and Nutrition', 'Complement your fitness journey with personalized diet and nutrition guidance from our experts.Our nutritionists at A.k.Gym are here to support your overall well-being. We offer personalized diet plans, weight management strategies, nutritional counseling, and valuable tips for maintaining a healthy and balanced diet.Understanding that nutrition plays a crucial role in achieving fitness goals, we work with our members to develop sustainable eating habits that align with their individual needs and preferences.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'AAYUSH01', '0001'),
(2, 'KENIL', '0001');

-- --------------------------------------------------------

--
-- Table structure for table `beast_mode_diet_content`
--

CREATE TABLE `beast_mode_diet_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beast_mode_diet_content`
--

INSERT INTO `beast_mode_diet_content` (`id`, `title`, `description`) VALUES
(8, 'Breakfast:', 'Scrambled tofu with veggies , Whole grain toast , Fresh fruit'),
(9, 'Mid-Morning Snack:', 'Greek yogurt with chia seeds , Mixed nuts'),
(10, 'Lunch:', 'Quinoa or brown rice bowl with black beans, veggies, and avocado\r\nMixed salad'),
(11, 'Afternoon Snack:', 'Protein smoothie with plant-based protein powder, almond milk, banana, and peanut butter'),
(12, 'Dinner:', 'Lentil or chickpea curry with veggies , Quinoa or whole grain roti , Steamed broccoli or green beans'),
(13, 'Post-Workout Snack:', 'Chocolate protein shake with almond milk'),
(14, 'Hydration:', 'Drink plenty of water throughout the day.');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentbicep_content`
--

CREATE TABLE `equipmentbicep_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmentbicep_content`
--

INSERT INTO `equipmentbicep_content` (`id`, `title`, `description`, `image_path`) VALUES
(2, 'BICEP CURL MACHINE', 'The bicep curl machine is one of the best bicep machines. Your lower arm can move freely doing bicep curls, but the bicep curl machine controls the movement of your upper arm.', '4-min-2-1280x720.png'),
(3, 'PREACHER CURL MACHINE', 'A Preacher curl machine is one of the more popular weight machines for people who want to improve their biceps. When using the preacher curl machine, your upper arms rest on an inclined bench, making it much harder to use other body parts to lift the weights. For example, it stops you using the latissimus dorsi to move the weight. A bicep workouts machine is efficient and makes it easy to do perfect preacher curls.', '13-min-1-1280x720.png'),
(4, 'CABLE CROSSOVER MACHINE', 'A cable crossover machine is one of the taller gym machines that might have a simple T-shape or include more attachments. The cable machine includes cables and at least two pulleys with handles that you pull up or down, diagonally, or across your body.\r\n\r\nThese gym machines are hugely helpful for any strength training workout. But they require some expert tuition if you want to use them safely and effectively.', '9-min-1280x720.png'),
(5, 'RESISTANCE BANDS', 'Resistance bands are wide, colorful elastic bands that come in different shapes, thicknesses, and sizes. Some come with attachments. A thicker/wider resistance band provides more resistance. Generally, the darker the color, the more resistance it provides.', '12-min-1280x720.png'),
(8, 'Dumbell Curl', 'The biceps curl is a highly recognizable weight-training exercise that works the muscles of the upper arm and, to a lesser extent, those of the lower arm.\r\nIt\'s an excellent exercise for seeing results in strength and definition.\r\n\r\nDifferent equipment and grips can be used for this exercise including those using dumbbells, kettlebells, barbells, resistance bands, or cable machines. Curls are a typical exercise used in upper-body strength training routines.', '105_M.png'),
(10, 'Chin Dip Assist', 'The Chin Dip Assist, is an excellent combo unit not only for big commercial gyms, but is also a great choice for small fitness facilities as well because it is a great unit for an overall upper body development. This machine targets the back, shoulder and arm muscles and hence, if you’re aiming to develop your upper body strength gradually, then this equipment is the right choice; as it also supports up to 75 kgs of weight resistance. It also helps in developing the important muscles in the shoulder, arm, as well as the core muscles.', 'images.png');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentchest_content`
--

CREATE TABLE `equipmentchest_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmentchest_content`
--

INSERT INTO `equipmentchest_content` (`id`, `title`, `description`, `image_path`) VALUES
(7, 'Chest Press Machine', 'The chest press machine is a top contender because of how effectively it targets your chest muscles!\r\n\r\nThis machine simulates bench presses as accurately as possible, though instead of lying on your back, you’re typically sitting upright/at an incline.\r\n\r\nHowever, you still push the machine directly out in front of you, so it’s the same range of motion as the bench press.', 'chest press machine.jpg'),
(8, 'Smith Machine', 'I’m a huge fan of Smith machine bench presses for one simple reason: they’re just as good as bench presses, but feature the added safety of the Smith machine.\r\n\r\nThe Smith machine is basically a barbell affixed to a sliding rail. The barbell can only move in one direction: up and down.\r\n\r\nThere’s no forward, backward, or lateral (side-to-side) motion, so there’s no risk of tilting or tipping. It ensures that the barbell goes through only the correct range of motion for the bench press.', 'smith machine.jpg'),
(9, 'Cable Machine', 'I LOVE the cable machine!\r\n\r\nIt’s not only insanely versatile, but it’s also one of the most effective for muscle-building. The system of pulleys and cables allows you to lift heavy loads and increases the time your muscles spend under tension, which leads to faster fatigue and greater hypertrophy.\r\n\r\nThere are plenty of options for chest exercises on a cable machine—everything from cable machine bench presses (using a flat, decline, or incline bench), cable flys (lying on a flat bench), standing cable flys, cable crossovers, cable iron cross, and many more.\r\n\r\n', 'Cable Machine.jpg'),
(10, 'Chest Fly Machine', 'The Chest Fly Machine is one I rely heavily on to help improve form and posture on Chest Day.\r\n\r\nBecause the range of motion is controlled, I can focus on how my shoulders, elbows, and wrists are positioned throughout the exercise.', 'Chest-Fly-Machine.jpg'),
(11, 'Pec Deck', 'The Pec Deck is an excellent machine to simulate dumbbell flys, but with a unique twist. Instead of gripping the handles like you do with flys (or the chest fly machine), your arms are bent so your forearms are pushing against the pad.\r\n\r\nThis actually helps to decrease tricep engagement and maximize chest muscle engagement, working all parts of your chest muscle from outer to inner.', 'Pec-Deck-Machine.jpg'),
(12, 'ISO Incline Press', 'The ISO Incline Press works your muscles in a similar fashion to the incline bench press. However, as the ISO in its name suggests, it forces both hemispheres of your body to engage together and independently of each other.\r\n\r\nEach of the handles is connected to its own weight, so each arm and chest muscle will have to work on its own to lift the load.\r\n\r\nWhat this does is highlight any inconsistencies or imbalances in your strength. We all know that one side of our body is stronger than the other, and this machine lets you identify which side that is and pay extra attention to it.', 'ISO-Incline-Bench-Press.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentlast_content`
--

CREATE TABLE `equipmentlast_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmentlast_content`
--

INSERT INTO `equipmentlast_content` (`id`, `title`, `description`, `image_path`) VALUES
(2, 'Lat Pulldown Machine', 'The Lat Pull-Down Machine is one of the most popular and versatile gym machines specifically designed to target the muscles in your back, primarily the latissimus dorsi (or “lats”). It is a versatile machine that can be used for a variety of exercises to build a stronger and wider back.\r\n\r\nThe lat pulldown can be performed with different variations. With simple adjustments to your grip, posture, or the type of bar you use, you can turn this classic exercise into a multi-faceted tool for back development.\r\n\r\nThe machine often comes with various handle attachments, offering different grips for more targeted workouts.', 'How-To-Do-Lat-Pulldown.png'),
(3, 'Seated Row Machine', 'The seated cable row is a compound exercise that utilizes a weighted horizontal cable row machine to work the upper body muscles. It is an excellent all-around compound exercise for developing mainly the middle back, while offering useful arm work as well.\r\n\r\nThe rowing movement targets the back muscles differently than vertical pulling motions like lat pulldowns. It is a great exercise for beginners and can be used as part of an upper body strength workout.\r\n\r\nTo target back muscle from different angles, this exercise can be performed in various ways. Different Attachment Used For Cable Row Exercise:', 'Seated-Cable-Rows-768x432.png'),
(4, ' Chest Supported Row', 'The Chest Supported Machine Row is a specialized gym equipment designed to isolate your back muscles while providing support to your chest and torso.\r\n\r\nThis machine is an excellent option for those who have lower back issues or simply want to focus exclusively on their upper back muscles, since it minimizes the strain on your lower back.\r\n\r\nThe equipment usually consists of a padded chest support, a seat, and handlebars or grips connected to a weight stack or plates. You will typically be able to use an underhand grip, overhand grip, neutral grip, close grip, and wide grip.', 'Chest-Supported-Machine-Row.png'),
(5, 'Landmine Row', 'If you are looking to add freshness and variety to your gym back workouts and give yourself a new challenge, give this landmine row exercise a try.\r\n\r\nThe Landmine Row is a unique and versatile strength training exercise that utilizes a barbell anchored into a landmine attachment or securely placed in a corner.\r\n\r\nThe angled position of the barbell gives you a different strength curve than traditional rows, which adds variety to your back workout and targets your muscles in a new way.', 'Muscle-Worked-During-Landmine-Row.png'),
(6, ' Pec Deck Machine (Reverse Fly)', 'The Pec Deck Machine is traditionally used for chest exercises, but can be adapted for a Reverse Fly to target your upper back muscles. The Pec Deck Machine usually consists of a seat, back support, and two arm pads or handles that can be adjusted to various angles.\r\n\r\nFor the Reverse Fly, you’ll be using the machine in a way that’s opposite to the conventional pec deck fly. It is a simple yet effective exercise that increases deltoid muscle definition and strength. The pec deck rear delt machine fly targets your upper back muscles and shoulder muscles, particularly the rear deltoids, (backside of your shoulders), Traps and rhomboid.\r\n\r\nThe Rear delt fly machine provides consistent resistance throughout the entire range of motion. Additionally, this machine offers various technical adjustments, such as grip positions, trajectory, and range of motion settings.', 'Pec-Deck-Rear-Delt-Machine-Fly1.png'),
(7, 'Assisted Pull-Up Machine', 'Pull-ups are one of the best bodyweight exercises for building upper body strength, particularly in the back and bicep. However, they can be challenging for many people, especially those who are new to fitness or who are recovering from an injury. This is where the Assisted Pull-Up Machine comes into play.\r\n\r\nThis specialized gym equipment has a counterweight system that offsets some of your body weight, making it easier to perform pull-ups or chin-ups. The machine typically consists of a pull-up bar attached to a weight stack via a pulley system, along with a platform or knee pad to place your knees or feet on.', 'Band-Assisted-Chin-Ups-And-Pull-Ups-1024x576.png');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentshoulder_content`
--

CREATE TABLE `equipmentshoulder_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmentshoulder_content`
--

INSERT INTO `equipmentshoulder_content` (`id`, `title`, `description`, `image_path`) VALUES
(2, 'Increased Time Under Tension', 'Weightlifting and resistance training is all about A) increasing the load and B) pushing your muscles to the point of failure.\r\n\r\nWith barbells, dumbbells, and kettlebells serving as your “load,” you have to work in the right rep range to hit failure at the right time (typically by the end of your last set/end of your workout).\r\n\r\nCable machines allow you to work with the exact same load, but actually help you to hit failure faster/with fewer reps.\r\n\r\nThat’s because the cable machine maintains constant tension throughout the full movement, with no “rest point” at the top or bottom of each exercise (think of how you can “rest” at the top of the bench press or at the bottom of a curl).', 'Cable-Shoulder-Exercises.jpg'),
(3, 'Front and Side Raises', 'If you want to build powerful shoulders, you’ve got to work on all three aspects: posterior, anterior, and lateral.', 'Cable-Machines-Exercises-for-Shoulders.jpg'),
(4, 'Shoulder Press Machine', 'The Shoulder Press Machine, sometimes called the “Military Press Machine,” is a staple in gyms and fitness centers worldwide. This machine is specifically designed to target the shoulder muscles, as it provides a controlled environment for overhead pressing movements. It is an excellent exercise for building the front and side deltoid muscles.\r\n\r\nMachine presses have advantages over free-weight presses, providing better stability and safety.\r\n\r\nThey also offer a choice of handgrips. A neutral grip (palms facing together) focuses more on the anterior deltoid better than a pronated grip (palms forward).  \r\n\r\nThis exercise requires very strict movement because the bar is fixed to the rack, and the weights can go much lower. This gives the front deltoid muscles a good stretch.  ', 'Shoulder-Press-Machine.jpg'),
(5, 'Smith Machine For Shoulder Workout', 'The Smith Machine is a gym apparatus known for its guided barbell system. This allows movements to be safer and more controlled than traditional free weights.\r\n\r\nWhile it is often used for various exercises such as squats and smith machine bench presses, the Smith Machine is also an excellent addition to your shoulder training regimen as well.\r\n\r\nFor shoulder workouts on the Smith Machine, the muscles targeted can vary based on the exercises chosen. However, here are some of the most commonly targeted shoulder muscles:', 'Standing-Smith-Machine-Shoulder-Press-1.png'),
(6, ' Double Pulley Cable Machine', 'The Double Pulley Cable Machine is a versatile and effective piece of gym equipment that offers a wide range of exercises for muscle targeting and isolation. Unlike free weights, the cable machine provides constant tension throughout the range of motion.\r\n\r\nFeaturing two adjustable pulleys, this machine allows you to perform an array of pulling and lifting movements from various angles, optimizing your shoulder training for strength, hypertrophy, or endurance.\r\n\r\nHere are some effective shoulder exercises you can perform on this versatile machine:', 'Cable-Lateral-Raise-1.png'),
(7, 'Pec Deck Machine (Reverse Fly Machine)', 'The Pec Deck Machine is traditionally used for chest exercises, but can be adapted for a Reverse Fly to target your upper back and shoulder muscles. The Pec Deck Machine usually consists of a seat, back support, and two arm pads or handles that can be adjusted to various angles.\r\n\r\nFor the Reverse Fly, you’ll be using the machine in a way that’s opposite to the conventional pec deck fly. It is a simple yet effective exercise that increases deltoid muscle definition and strength. The pec deck rear delt machine fly targets your upper back muscles and shoulder muscles, particularly the rear deltoids, (backside of your shoulders), Traps and rhomboid.\r\n\r\nThe Rear delt fly machine provides consistent resistance throughout the entire range of motion. Additionally, this machine offers various technical adjustments, such as grip positions, trajectory, and range of motion settings.', 'Pec-Deck-Rear-Delt-Machine-Fly.png');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentsixpack_content`
--

CREATE TABLE `equipmentsixpack_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmentsixpack_content`
--

INSERT INTO `equipmentsixpack_content` (`id`, `title`, `description`, `image_path`) VALUES
(2, 'Functional Abdominal Bench', 'Functional Abdominal Bench is angled and has a foot roller that is both ergonomically designed to effectively target the abdominal muscles thus strengthening the core. It’s a compact equipment that can be used in commercial gyms as well as small fitness facilities or even in home gyms.', 'Functional-Abdominal-Bench.jpg'),
(3, 'Abdominal Bench', 'The Abdominal Bench is a simple adjustable equipment that directly helps in targeting the abdominal muscles. This adjustable abdominal exercise bench is used to target abdominal muscles to strengthen your core while performing exercises with this bench set in different positions.', 'Abdominal-Bench.jpg'),
(4, 'Abdominal Crunch', 'Through a stabilized motion, the Abdominal Crunch machine helps to train the abdominal core muscles effectively. This exercise performed targets the rectus abdominis or the ‘six-pack’ muscles. It is an excellent machine as it avoids cheating in any form, thus resulting in desired benefits to abdominal muscles. Weighted ab training using this machine can help in the development of well-defined core muscles.', 'Abdominal-Crunch.jpg'),
(5, 'Chin-Up Dip', 'The Chin-Up Dip machine, as the name suggests, is not just good for performing chin-ups or pull-ups, but also is a great combination machine offering an excellent upper body workout for core muscles, as well as the shoulder muscles. It offers various exercise possibilities such as pull-ups, chin-ups, crunches, incline push-ups, etc. for an overall improvement of core strength and stability.', 'Chin-Up-Dip.jpg'),
(6, 'Sit up benches:', 'It works by creating more resistance in your sit ups, meaning that it is more effective in toning your abdominal muscles than regular sit ups. It also has benefits in strengthening your obliques and hip flexors too. A sit up bench supports your back and typically has rollers that lock your feet in place.\r\n', '66703047.png'),
(7, 'Ab Wheels:', 'An ab exercising wheel is perfect for working out your lower body muscles, plus the integrated movement of rolling the wheels forward and back will get your heart rate up quickly. Performing ab wheel rollouts activates the upper and lower extremities as you rotate.', '66703064.png');

-- --------------------------------------------------------

--
-- Table structure for table `equipmentsquats_content`
--

CREATE TABLE `equipmentsquats_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmentsquats_content`
--

INSERT INTO `equipmentsquats_content` (`id`, `title`, `description`, `image_path`) VALUES
(2, 'SQUAT RACK', 'Where serious squatting takes place. In fitness and strength training, the squat exercise trains your full body.  All serious strength training regiments should incorporate the squat station gym equipment.', 'POWER-SQUAT-RACK.png'),
(3, 'LEG EXTENSION MACHINE', 'Lifting the weights up with your quads, holding steady for a second or two once you fully extend at the top. Leg extension machines are the perfect gym equipment to use when you are rehabilitating from an injury or just trying to strength train your quads.', 'LEG-EXTENSION-MACHINE.png'),
(4, 'LEG CURL MACHINE', 'Laying on your stomach and facing the floor, lifting with your legs upwards towards your lower back. Squeezing at the top and holding for a second or two, feel it in your hamstrings. A good tool to use for either toning down or bulking up your legs.', 'LEG-CURL-MACHINE.png'),
(5, 'LEG PRESS MACHINE', 'Ultimate leg training machine. Laying down with you back against a makeshift wall, push the platform/weights upwards; do not lock your joints. Perfect machine to train legs with.', 'LEG-PRESS-MACHINE.png'),
(6, 'Calf Squat Combo', 'The Muscle D Fitness Front/Rear/Calf Squat Combo is a versatile and compact exercise machine designed for comprehensive lower body workouts. With its innovative design, this combo machine allows users to target their quadriceps, hamstrings, glutes, and calves through front squats, rear squats, and calf raises. The adjustable features and ergonomic design ensure a customizable and comfortable workout experience, making it an ideal choice for individuals looking to strengthen and tone their lower body muscles efficiently.', 'SquatMachine3.jpg'),
(7, 'SMITH MACHINES', 'Many smith machines include a self-balancing barbell.  Equipped with guide rods, you don’t have to worry about balancing the barbell.  As a result, you can devote all your attention on lifting the weight.  The bar moves smoothly along a fixed vertical plane.  In other words, it won’t move sideways, or fall forward or backward.', 'TuffStuff-CXT225-squat-min-550x550.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `equipmenttriceps_content`
--

CREATE TABLE `equipmenttriceps_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipmenttriceps_content`
--

INSERT INTO `equipmenttriceps_content` (`id`, `title`, `description`, `image_path`) VALUES
(2, 'Bench dip', '“Place two flat benches parallel to one another, around 1-1.5m apart (adjust the width to suit your height),” says Adepitan. “Place your hands on the edge of the bench, around shoulder-width apart, and put your heels on the edge of the other bench.\r\n\r\n“Keeping your body close to the bench, slowly lower in a dip until your elbows are at the same height as your shoulders. Slowly push back up, squeezing through the triceps. Do not lock out your elbows at the top of the exercise.”', 'LQGjNHKYE5sVMRv9wvYALJ-1200-80.png'),
(3, 'Diamond press-up', '“This is similar to the standard press-up, but you bring your hands together and form a diamond shape with your index fingers and thumbs, which puts more emphasis on the triceps as you perform the exercise,” says Breakenridge.\r\n\r\nMake sure you keep your elbows close to your sides as you drop down and push back up – this will ensure you are hitting your triceps as hard as possible.', 'DyaELCSFJnpfdXtH5HLep7-1200-80.png'),
(4, 'Lying dumbbell triceps extension', '“Many gym-goers place an undue amount of stress on their elbow joints,” says Martin, “so if you’re going to do triceps extensions of any kind where you flex the elbow, dumbbells are preferable because they allow a greater range of movement. Lying on a flat bench, press two dumbbells above your head with your elbows facing forwards. Lower the dumbbells towards your shoulders by flexing at the elbow. Once there, return to the start by contracting your triceps and extending your elbows until the dumbbells are back overhead. Don’t fully lock the elbows at the top so that you maintain tension in the muscles.”', 'HzvoFz9DCtMtkTZt2R8n7J-1200-80.png'),
(5, 'Skullcrusher', 'Hold a weight above your head, then bring it closer to your head. Yep, we’ll file this one under “advanced”. As simple as it sounds, it’s not for beginners.\r\n\r\nLie on your back on a flat bench holding two dumbbells with your arms extended straight up and palms facing. For (hopefully) obvious reasons, choose a light weight while you familiarise yourself with the form and demands of the move.\r\n\r\nKeeping your upper arms stationary throughout, bend at your elbows to slowly lower the weights under control towards your forehead, then use your triceps to raise the dumbbells back to the start. You can use an EZ-bar or a barbell, but there’s a greater chance of losing control with these, so only consider them once you’ve truly mastered the dumbbell version.', 'zyptXG2zBBJ8HJYYegeeFJ-1200-80.png'),
(6, 'Cable overhead triceps extension', '“Attach a rope to the bottom pulley of the cable machine,” says Adepitan. “Face away from the pulley and, holding the rope with both hands with palms facing each other (neutral grip), extend your arms until your hands are directly above your head. Your elbows should be in close to your head and the arms should be perpendicular to the floor with the knuckles pointing to the ceiling.\r\n\r\n“Slowly lower the rope behind your head as you hold the upper arms stationary. Inhale as you perform this movement and pause when your triceps are fully stretched. Breathe out as you return to the starting position by flexing your triceps.”', 'KRwaA3us7S9uSuASdZgiPd-1200-80.png'),
(7, 'Close-grip bench ', '“Lie with your back on a flat bench,” says Adepitan. “With hands around shoulder-width apart, lift the barbell from the rack and hold it straight over you with your arms locked.\r\n\r\n“Lower the bar slowly until the bar touches the middle of your chest, inhaling as you go. Make sure that, as opposed to a regular bench press, you keep the elbows close to your torso at all times in order to maximise the involvement of your triceps. Pause for a second, then press the bar back to the starting position using your triceps muscles, exhaling as you go. Lock your arms in the contracted position, hold for a second and then start coming down slowly again. It should take at least twice as long to go down than to come up.”', 'TDqvm2YJ9QG6Z2HDRNFXa4-1200-80.png');

-- --------------------------------------------------------

--
-- Table structure for table `exercisebiceps`
--

CREATE TABLE `exercisebiceps` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercisebiceps`
--

INSERT INTO `exercisebiceps` (`id`, `title`, `description`, `video_url`) VALUES
(2, 'Chin Ups', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Chin Ups  - Short Demo.mp4'),
(3, 'Bicep Curls', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'How to do a Barbell Biceps Curl.mp4'),
(6, 'Cable Curls', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'videoplayback.mp4'),
(8, 'Dumbbell Curls', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Alternating Dumbbell Curl.mp4'),
(9, 'Preacher curls', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Preacher Curl Machine.mp4'),
(10, 'Concentration Curls', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Concentration Curls - Biceps Exercise - Bodybuilding.com.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `exercisechest`
--

CREATE TABLE `exercisechest` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercisechest`
--

INSERT INTO `exercisechest` (`id`, `title`, `description`, `video_url`) VALUES
(6, 'Push Ups', 'SET - 1<br>20 X<br><br>\r\nSET - 2<br>20 X<br><br>\r\nSET - 3<br>20 X<br><br>', 'The Push-Up.mp4'),
(7, 'Pull Ups', 'SET - 1<br>20 X<br><br>\r\nSET - 2<br>20 X<br><br>\r\nSET - 3<br>20 X<br><br>', 'The Pull-Up.mp4'),
(8, 'Flat Bench Press', 'SET - 1<br>12 X<br><br>SET - 2<br>10 X<br><br>SET - 3<br>8 X<br><br>', 'The Bench Press.mp4'),
(9, 'Incline Dumbbell Press', 'SET - 1<br>12 X<br><br>\r\nSET - 2<br>10 X<br><br>\r\nSET - 3<br>8 X<br><br>', 'How To Do A Dumbbell Incline Press.mp4'),
(10, 'Decline Press', 'SET - 1<br>12 X<br><br>\r\nSET - 2<br>10 X<br><br>\r\nSET - 3<br>8 X<br><br>', 'Decline Barbell Bench Press - Chest Exercise.mp4'),
(11, 'Incline Bench Dumbels Fly', 'SET - 1<br>12 X<br><br>\r\nSET - 2<br>10 X<br><br>\r\nSET - 3<br>8 X<br><br>', 'How To Do An Incline Dumbbell Fly.mp4'),
(12, 'Chest Dips', 'SET - 1<br>12 X<br><br>\r\nSET - 2<br>10 X<br><br>\r\nSET - 3<br>8 X<br><br>', 'Dips   Chest Version - Chest Exercise - Bodybuilding.com.mp4'),
(13, 'Dumbell bent arm pullover', 'SET - 1<br>12 X<br><br>\r\nSET - 2<br>10 X<br><br>\r\nSET - 3<br>8 X<br><br>', 'Dumbbell Bent Arm Pullover - Back Exercise.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `exerciselast`
--

CREATE TABLE `exerciselast` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exerciselast`
--

INSERT INTO `exerciselast` (`id`, `title`, `description`, `video_url`) VALUES
(6, 'Lat Pulldown\'s', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'How To Do A Lat Pulldown.mp4'),
(7, 'Seated Cable Row', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Seated Cable Row Close Grip - Back Exercise.mp4'),
(8, 'Front Lat Pulldowns', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Close-Grip Front Lat Pulldown - Back Exercise.mp4'),
(9, 'Bentover Barbell Row', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'EZ-Bar Bent Over Barbell Row.mp4'),
(10, 'T-bar Row', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'T-Bar Row with Handle _ Exercise Guide.mp4'),
(13, 'Dumbell Rows', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'One Arm Dumbbell Row - Back Exercise - Bodybuilding.com.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `exerciseshoulder`
--

CREATE TABLE `exerciseshoulder` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exerciseshoulder`
--

INSERT INTO `exerciseshoulder` (`id`, `title`, `description`, `video_url`) VALUES
(2, 'Military Press', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'The Shoulder Press.mp4'),
(3, 'Dumbbell Press', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'How To Do A Dumbbell Shoulder Press.mp4'),
(4, 'Machine Millitary Press', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Machine Shoulder Press - Learn how to do Shoulder Press Workout.mp4'),
(5, 'Dumbbell Lateral Raise', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Dumbbell Lateral Raise.mp4'),
(6, 'Cable Front Raise', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'How To Do A Cable Front Raise.mp4'),
(9, 'Upright Rows', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Barbell Upright Rows.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `exercisesixpackabs`
--

CREATE TABLE `exercisesixpackabs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercisesixpackabs`
--

INSERT INTO `exercisesixpackabs` (`id`, `title`, `description`, `video_url`) VALUES
(2, 'Abs Leg Rises', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Hanging Leg Raises.mp4'),
(3, 'Cross Body Crunches', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Cross Body Crunches.mp4'),
(4, 'Jackknives', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'How to Do a Jackknife _ Ab Workout.mp4'),
(5, 'Leg Raise', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'How To Do Leg Raises Exercise For Beginners Lower Core And Abs.mp4'),
(7, 'Plank ', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Forward Full Plank_Elbow Plank.mp4'),
(8, 'Reverse Crunches', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Reverse Crunch.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `exercisesquats`
--

CREATE TABLE `exercisesquats` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercisesquats`
--

INSERT INTO `exercisesquats` (`id`, `title`, `description`, `video_url`) VALUES
(2, 'Barbbell Squats', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Gym Shorts (How To)_ The Squat.mp4'),
(3, 'Front Barbbell Squats', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Gym Shorts (How To)_ The Front Squat.mp4'),
(4, 'Calves Leg Press', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Leg Press Calf Raises - Male.mp4'),
(5, 'Sumo Squat', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'DB Sumo Squat.mp4'),
(6, 'Calf Machine ', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Seated Calf Raise Machine in 60 seconds.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `exercisetricep`
--

CREATE TABLE `exercisetricep` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exercisetricep`
--

INSERT INTO `exercisetricep` (`id`, `title`, `description`, `video_url`) VALUES
(3, 'Dumbbell Extension', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'How to Do Triceps Dumbbell Extensions.mp4'),
(4, 'Incline Triceps Extension', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Lying Triceps Extension (LTE) - Gym Shorts (How To).mp4'),
(5, 'Machine Triceps Extension', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Machine Tricep Extensions.mp4'),
(6, 'Close Grip Bench Press', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Close Grip Bench Press_ Gym Shorts (How To).mp4'),
(7, 'Narrow Grip Push Ups', 'SET - 1<br/>\r\n12 X<br/><br/>\r\nSET - 2<br/>\r\n10 X<br/><br/>\r\nSET - 3<br/>\r\n08 X<br/><br/>', 'Hands on Bench Narrow Grip Push Up.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `putfeedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `putfeedback`) VALUES
(1, 'aayush', 'good\r\n'),
(2, 'aayush', 'nice'),
(8, 'AAYUSH', 'good web');

-- --------------------------------------------------------

--
-- Table structure for table `lean_diet_mode_content`
--

CREATE TABLE `lean_diet_mode_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lean_diet_mode_content`
--

INSERT INTO `lean_diet_mode_content` (`id`, `title`, `description`) VALUES
(3, 'Breakfast:', 'Scrambled tofu with veggies or avocado toast , Fresh fruit'),
(4, 'Mid-Morning Snack:', 'Greek yogurt with nuts'),
(5, 'Lunch:', 'Salad with mixed greens, cherry tomatoes, cucumber, and a vinaigrette dressing , Quinoa or brown rice on the side'),
(6, 'Afternoon Snack:', 'Sliced veggies (carrots, bell peppers) with hummus'),
(7, 'Dinner:', 'Plant-based protein source (tofu, tempeh) with steamed or roasted vegetables , Sweet potato or quinoa as a side'),
(8, 'Evening Snack (optional):', 'Mixed berries or a small piece of dark chocolate'),
(9, 'Hydration:', 'Drink plenty of water throughout the day.');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `login_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `username`, `login_time`) VALUES
(1, 'bc1', '2024-01-23 17:33:44'),
(2, 'bc1', '2024-01-23 17:38:14'),
(3, 'aayush01', '2024-01-23 17:38:26'),
(4, 'ab1', '2024-01-23 17:39:42'),
(5, 'bc1', '2024-01-23 17:53:37'),
(6, 'bc1', '2024-01-23 18:49:37'),
(7, 'bc1', '2024-01-23 18:51:30'),
(8, 'bc1', '2024-01-23 19:13:30'),
(9, 'ab11', '2024-01-24 06:14:56'),
(10, 'ab11', '2024-01-24 06:15:16'),
(11, 'ab11', '2024-01-24 06:17:05'),
(12, 'bc1', '2024-01-24 06:21:21'),
(13, 'bc1', '2024-01-24 08:11:30'),
(14, 'bc1', '2024-01-24 08:11:34'),
(15, 'a1', '2024-01-26 08:25:07'),
(16, 'a1', '2024-01-26 08:34:44'),
(17, 'a1', '2024-01-26 10:17:55'),
(18, 'a1', '2024-01-26 12:55:18'),
(19, 'a1', '2024-01-26 13:17:03'),
(20, 'a1', '2024-01-26 15:00:23'),
(21, 'a1', '2024-01-26 15:01:27'),
(22, 'a1', '2024-01-26 15:04:39'),
(23, 'a1', '2024-01-26 15:08:18'),
(24, 'g1', '2024-01-26 16:15:38'),
(25, 'g1', '2024-01-26 16:17:54'),
(26, 'a1', '2024-01-26 17:04:27'),
(27, 'a1', '2024-01-26 17:21:43'),
(28, 'g1', '2024-01-26 17:26:30'),
(29, 'a1', '2024-01-26 17:33:26'),
(30, 'a1', '2024-01-26 18:06:38'),
(31, 'a1', '2024-01-26 18:07:43'),
(32, 'a1', '2024-01-26 18:15:47'),
(33, 'a1', '2024-01-26 18:31:21'),
(34, 'AAYUSH01', '2024-01-27 07:02:12'),
(35, 'a1', '2024-01-27 07:58:53'),
(36, 'a1', '2024-01-27 08:01:47'),
(37, 'cc', '2024-01-27 10:16:47'),
(38, 'a1', '2024-01-27 11:08:05'),
(39, 'a1', '2024-01-27 11:14:31'),
(40, 'a1', '2024-01-27 11:26:54'),
(41, 'a1', '2024-01-27 14:36:52'),
(42, 'a1', '2024-01-27 14:38:59'),
(43, 'a1', '2024-01-27 15:16:04'),
(44, 'a1', '2024-01-27 15:22:08'),
(45, 'a1', '2024-01-28 08:53:16'),
(46, 'a1', '2024-01-28 11:48:54'),
(47, 'a1', '2024-01-28 12:10:21'),
(48, 'a1', '2024-01-28 13:42:59'),
(49, 'a1', '2024-01-28 15:33:29'),
(50, 'a1', '2024-01-29 07:52:06'),
(51, 'a1', '2024-01-29 14:55:13'),
(52, 'a1', '2024-01-29 16:34:07'),
(53, 'a1', '2024-01-29 16:51:07'),
(54, 'a1', '2024-01-29 19:14:56'),
(55, 'a1', '2024-01-29 19:16:06'),
(56, 'a1', '2024-01-30 03:27:59'),
(57, 'a1', '2024-01-30 03:30:10'),
(58, 'a1', '2024-01-30 03:37:04'),
(59, 'a1', '2024-01-30 15:17:47'),
(60, 'a1', '2024-01-30 15:46:34'),
(61, 'a1', '2024-01-30 17:39:05'),
(62, 'a1', '2024-01-31 07:53:30'),
(63, 'a1', '2024-01-31 19:09:05'),
(64, 'a1', '2024-02-01 15:43:20'),
(65, 'a1', '2024-02-01 17:53:53'),
(66, 'a1', '2024-02-02 07:41:30'),
(67, 'a1', '2024-02-02 07:44:26'),
(68, 'a1', '2024-02-08 03:27:20'),
(69, 'a1', '2024-02-19 08:04:02'),
(70, 'aayush01', '2024-02-20 18:39:58'),
(71, 'kenil01', '2024-02-20 18:41:37'),
(72, 'aayush01', '2024-02-20 19:13:03'),
(73, 'aayush01', '2024-02-20 19:17:22'),
(74, 'aayush01', '2024-02-20 19:19:52'),
(75, 'aayush01', '2024-02-20 19:20:33'),
(76, 'aayush01', '2024-02-20 21:24:29'),
(77, 'aayush01', '2024-02-20 21:59:08'),
(78, 'aayush01', '2024-02-21 07:39:28'),
(79, 'aayush01', '2024-02-21 08:10:39'),
(80, 'aayush01', '2024-02-21 08:24:17'),
(81, 'aayush01', '2024-03-12 21:48:45'),
(82, 'aayush01', '2024-04-08 19:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `quotes_content`
--

CREATE TABLE `quotes_content` (
  `id` int(11) NOT NULL,
  `quote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quotes_content`
--

INSERT INTO `quotes_content` (`id`, `quote`) VALUES
(9, '\"The only bad workout is the one that didn\'t happen.\"'),
(10, '\"Don\'t wish for a good body, work for it.\"'),
(11, '\"Your body can stand almost anything. It\'s your mind that you have to convince.\"'),
(12, '\"The only way to do great work is to love what you do.\"'),
(13, '\"Strive for progress, not perfection.\"'),
(14, '\"Sweat is just fat crying.\"'),
(15, '\"The pain you feel today will be the strength you feel tomorrow.\"'),
(16, '\"Make yourself a priority. At the end of the day, you\'re your longest commitment.\"'),
(17, '\"It\'s a slow process, but quitting won\'t speed it up.\"'),
(18, '\"Fall in love with taking care of yourself - mind, body, and spirit.\"');

-- --------------------------------------------------------

--
-- Table structure for table `six_pack_diet_content`
--

CREATE TABLE `six_pack_diet_content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `six_pack_diet_content`
--

INSERT INTO `six_pack_diet_content` (`id`, `title`, `description`) VALUES
(11, 'Breakfast:', 'Protein smoothie with plant-based protein powder, almond milk, banana, and spinach'),
(12, 'Mid-Morning Snack:', 'Greek yogurt with chia seeds or a handful of almonds'),
(13, 'Lunch:', 'Quinoa or lentil salad with mixed vegetables and a light vinaigrette dressing'),
(14, 'Afternoon Snack:', 'Sliced cucumber or celery with hummus'),
(15, 'Dinner:', 'Grilled tofu or tempeh with a side of sautéed vegetables and quinoa'),
(16, 'Evening Snack (optional):', 'A small portion of mixed berries or a piece of dark chocolate'),
(17, 'Hydration:', 'Drink plenty of water throughout the day.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(12, 'AAYUSH', 'SONI', 'aayush01', '$2y$10$LeTTO2JEoR.FqYWyH91Np.prk3shj8Iyw1xZ4u79n.bfamaXKQ1OW'),
(14, 'KENIL', 'RABADIYA', 'kenil01', '$2y$10$uwtEnPuZSHklTfUhf3gFcOcr3DvXSUGYbhlG/jquooqkRQ7ueGnwS');

-- --------------------------------------------------------

--
-- Table structure for table `videos_content`
--

CREATE TABLE `videos_content` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos_content`
--

INSERT INTO `videos_content` (`id`, `name`, `video_url`) VALUES
(8, '1', '1.mp4'),
(9, '2', '2.mp4'),
(10, '3', '3.mp4'),
(11, '4', '4.mp4'),
(12, '5', '5.mp4'),
(13, '6', '6.mp4'),
(14, '7', '7.mp4'),
(15, '8', '8.mp4'),
(16, '9', '9.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `wallpapers_content`
--

CREATE TABLE `wallpapers_content` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallpapers_content`
--

INSERT INTO `wallpapers_content` (`id`, `name`, `image_url`) VALUES
(20, '1', 'images (1).jfif'),
(21, '2', 'images (2).jfif'),
(22, '3', 'images (3).jfif'),
(23, '4', 'images (4).jfif'),
(24, '5', 'images (5).jfif'),
(25, '6', 'images (6).jpg'),
(26, '7', 'images (7).jfif'),
(27, '8', 'images (8).jfif'),
(28, '9', 'images (9).jfif'),
(29, '10', 'images (10).jfif'),
(30, '11', 'images (11).jfif'),
(31, '12', 'images (12).jpg'),
(32, '13', 'images (13).png'),
(33, '14', 'images (14).jpg'),
(34, '15', 'images (15).jpg'),
(35, '16', 'images (16).jfif'),
(36, '17', 'images (17).jpg'),
(37, '18', 'images (18).jpg'),
(38, '19', 'images (19).jpg'),
(39, '20', 'images (20).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `website_views`
--

CREATE TABLE `website_views` (
  `id` int(11) NOT NULL,
  `view_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_views`
--

INSERT INTO `website_views` (`id`, `view_time`) VALUES
(1, '2024-01-23 23:17:09'),
(2, '2024-01-23 23:17:27'),
(3, '2024-01-23 23:18:02'),
(4, '2024-01-23 23:19:30'),
(5, '2024-01-23 23:21:31'),
(6, '2024-01-24 10:44:27'),
(7, '2024-01-24 10:45:07'),
(8, '2024-01-24 10:46:14'),
(9, '2024-01-24 10:49:16'),
(10, '2024-01-24 10:51:08'),
(11, '2024-01-24 10:51:11'),
(12, '2024-01-24 10:51:15'),
(13, '2024-01-24 10:51:23'),
(14, '2024-01-24 10:51:29'),
(15, '2024-01-24 10:51:33'),
(16, '2024-01-24 10:51:48'),
(17, '2024-01-24 10:51:58'),
(18, '2024-01-24 11:50:42'),
(19, '2024-01-26 12:54:30'),
(20, '2024-01-26 12:54:35'),
(21, '2024-01-26 12:54:38'),
(22, '2024-01-26 12:55:49'),
(23, '2024-01-26 19:30:18'),
(24, '2024-01-26 19:30:45'),
(25, '2024-01-26 19:31:52'),
(26, '2024-01-26 19:32:15'),
(27, '2024-01-26 19:34:52'),
(28, '2024-01-26 19:38:12'),
(29, '2024-01-26 20:40:01'),
(30, '2024-01-26 20:45:18'),
(31, '2024-01-26 20:45:47'),
(32, '2024-01-26 20:45:53'),
(33, '2024-01-26 21:34:29'),
(34, '2024-01-26 21:56:09'),
(35, '2024-01-26 21:56:38'),
(36, '2024-01-26 22:22:13'),
(37, '2024-01-26 22:37:44'),
(38, '2024-01-26 22:43:34'),
(39, '2024-01-26 23:01:11'),
(40, '2024-01-26 23:01:15'),
(41, '2024-01-26 23:08:14'),
(42, '2024-01-26 23:08:20'),
(43, '2024-01-26 23:08:52'),
(44, '2024-01-27 11:31:05'),
(45, '2024-01-27 11:31:36'),
(46, '2024-01-27 12:32:15'),
(47, '2024-01-27 14:43:01'),
(48, '2024-01-27 15:44:26'),
(49, '2024-01-27 15:56:41'),
(50, '2024-01-27 19:08:49'),
(51, '2024-01-27 19:18:57'),
(52, '2024-01-27 19:49:42'),
(53, '2024-01-27 19:49:43'),
(54, '2024-01-27 19:52:03'),
(55, '2024-01-27 20:13:53'),
(56, '2024-01-28 13:23:01'),
(57, '2024-01-28 13:23:10'),
(58, '2024-01-28 18:14:23'),
(59, '2024-01-29 12:21:52'),
(60, '2024-01-29 19:24:11'),
(61, '2024-01-29 20:51:38'),
(62, '2024-01-29 21:21:02'),
(63, '2024-01-29 21:22:30'),
(64, '2024-01-29 23:45:59'),
(65, '2024-01-29 23:47:12'),
(66, '2024-01-30 08:00:12'),
(67, '2024-01-30 08:06:47'),
(68, '2024-01-30 08:10:07'),
(69, '2024-01-30 21:05:06'),
(70, '2024-01-30 21:05:08'),
(71, '2024-01-30 23:22:46'),
(72, '2024-01-30 23:32:19'),
(73, '2024-01-31 12:29:09'),
(74, '2024-02-01 00:10:18'),
(75, '2024-02-01 20:03:25'),
(76, '2024-02-01 22:16:25'),
(77, '2024-02-01 22:23:48'),
(78, '2024-02-01 22:44:37'),
(79, '2024-02-02 12:10:23'),
(80, '2024-02-02 12:11:34'),
(81, '2024-02-08 07:56:48'),
(82, '2024-02-08 07:58:45'),
(83, '2024-02-08 22:37:17'),
(84, '2024-02-19 12:33:53'),
(85, '2024-02-19 12:35:39'),
(86, '2024-02-20 23:02:31'),
(87, '2024-02-20 23:02:59'),
(88, '2024-02-20 23:10:05'),
(89, '2024-02-20 23:13:11'),
(90, '2024-02-20 23:13:38'),
(91, '2024-02-20 23:41:02'),
(92, '2024-02-20 23:44:33'),
(93, '2024-02-20 23:44:41'),
(94, '2024-02-20 23:47:15'),
(95, '2024-02-20 23:47:23'),
(96, '2024-02-20 23:47:27'),
(97, '2024-02-20 23:50:18'),
(98, '2024-02-20 23:50:21'),
(99, '2024-02-20 23:50:25'),
(100, '2024-02-21 02:20:31'),
(101, '2024-02-21 02:20:45'),
(102, '2024-02-21 02:30:49'),
(103, '2024-02-21 12:07:03'),
(104, '2024-02-21 12:10:05'),
(105, '2024-02-21 12:39:27'),
(106, '2024-02-21 12:47:25'),
(107, '2024-02-21 12:53:43'),
(108, '2024-03-13 02:14:46'),
(109, '2024-03-13 02:14:49'),
(110, '2024-03-13 02:22:55'),
(111, '2024-04-08 23:25:10'),
(112, '2024-04-08 23:28:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beast_mode_diet_content`
--
ALTER TABLE `beast_mode_diet_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmentbicep_content`
--
ALTER TABLE `equipmentbicep_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmentchest_content`
--
ALTER TABLE `equipmentchest_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmentlast_content`
--
ALTER TABLE `equipmentlast_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmentshoulder_content`
--
ALTER TABLE `equipmentshoulder_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmentsixpack_content`
--
ALTER TABLE `equipmentsixpack_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmentsquats_content`
--
ALTER TABLE `equipmentsquats_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipmenttriceps_content`
--
ALTER TABLE `equipmenttriceps_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercisebiceps`
--
ALTER TABLE `exercisebiceps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercisechest`
--
ALTER TABLE `exercisechest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exerciselast`
--
ALTER TABLE `exerciselast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exerciseshoulder`
--
ALTER TABLE `exerciseshoulder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercisesixpackabs`
--
ALTER TABLE `exercisesixpackabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercisesquats`
--
ALTER TABLE `exercisesquats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercisetricep`
--
ALTER TABLE `exercisetricep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lean_diet_mode_content`
--
ALTER TABLE `lean_diet_mode_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes_content`
--
ALTER TABLE `quotes_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `six_pack_diet_content`
--
ALTER TABLE `six_pack_diet_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos_content`
--
ALTER TABLE `videos_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallpapers_content`
--
ALTER TABLE `wallpapers_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_views`
--
ALTER TABLE `website_views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `beast_mode_diet_content`
--
ALTER TABLE `beast_mode_diet_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `equipmentbicep_content`
--
ALTER TABLE `equipmentbicep_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `equipmentchest_content`
--
ALTER TABLE `equipmentchest_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `equipmentlast_content`
--
ALTER TABLE `equipmentlast_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `equipmentshoulder_content`
--
ALTER TABLE `equipmentshoulder_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `equipmentsixpack_content`
--
ALTER TABLE `equipmentsixpack_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `equipmentsquats_content`
--
ALTER TABLE `equipmentsquats_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `equipmenttriceps_content`
--
ALTER TABLE `equipmenttriceps_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `exercisebiceps`
--
ALTER TABLE `exercisebiceps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exercisechest`
--
ALTER TABLE `exercisechest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exerciselast`
--
ALTER TABLE `exerciselast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exerciseshoulder`
--
ALTER TABLE `exerciseshoulder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `exercisesixpackabs`
--
ALTER TABLE `exercisesixpackabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exercisesquats`
--
ALTER TABLE `exercisesquats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `exercisetricep`
--
ALTER TABLE `exercisetricep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lean_diet_mode_content`
--
ALTER TABLE `lean_diet_mode_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `quotes_content`
--
ALTER TABLE `quotes_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `six_pack_diet_content`
--
ALTER TABLE `six_pack_diet_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `videos_content`
--
ALTER TABLE `videos_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `wallpapers_content`
--
ALTER TABLE `wallpapers_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `website_views`
--
ALTER TABLE `website_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
