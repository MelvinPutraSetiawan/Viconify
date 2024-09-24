<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MsVideoSeeder extends Seeder
{
    public function run()
    {
        DB::table('ms_videos')->insert([
            [
                'UserID' => 1,
                'VideoImage' => 'Assets/images/videos/image1.jpg',
                'VideoLinkEmbedded' => 'Assets/videos/video1.mp4',
                'Title' => '1 Minute Sample Video',
                'Description' => 'A sample 1080p video using 5 second video clips stitched together to create a one minute video. We use this for benchmarks and testing.',
                'PostTime' => Carbon::now(),
                'Views' => 1000,
                'Like' => 500,
                'Dislike' => 10,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 2,
                'VideoImage' => 'Assets/images/videos/image2.jpg',
                'VideoLinkEmbedded' => 'Assets/videos/video2.mp4',
                'Title' => '4K Sample Video | Alpha 7C II',
                'Description' => 'The  Alpha 7C II  is a significant update of the Alpha 7C concept, offering high-level still and movie capabilities for hybrid shooters. The Alpha 7C II is about the same size and weight as the Alpha 7C. In a compact, lightweight body, it features a 33.0-megapixel image sensor that can record up to 4K 60p movies as well as high-quality stills. To ensure optimum performance in the widest possible range of shooting situations it includes 7.0-step image stabilisation and an AI processing unit* for incredibly fast, precise AF performance. The Alpha 7C II captures those meaningful moments and situations with ease.',
                'PostTime' => Carbon::now(),
                'Views' => 2000,
                'Like' => 1500,
                'Dislike' => 5,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 3,
                'VideoImage' => 'Assets/images/videos/image3.png',
                'VideoLinkEmbedded' => 'Assets/videos/video3.mp4',
                'Title' => 'Coca Cola Slow Motion',
                'Description' => 'Absolutely in awe with this cola commercial filmed by the videography maestro',
                'PostTime' => Carbon::now(),
                'Views' => 3000,
                'Like' => 2000,
                'Dislike' => 20,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 4,
                'VideoImage' => 'Assets/images/videos/image4.png',
                'VideoLinkEmbedded' => 'Assets/videos/video4.mp4',
                'Title' => 'Videvo | Sample Video',
                'Description' => 'Bring by the nature.',
                'PostTime' => Carbon::now(),
                'Views' => 4000,
                'Like' => 2500,
                'Dislike' => 15,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 5,
                'VideoImage' => 'Assets/images/videos/image5.png',
                'VideoLinkEmbedded' => 'Assets/videos/video5.mp4',
                'Title' => 'Videvo | Gunshot',
                'Description' => 'Bring it on.',
                'PostTime' => Carbon::now(),
                'Views' => 1000,
                'Like' => 500,
                'Dislike' => 10,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'Assets/images/videos/image6.png',
                'VideoLinkEmbedded' => 'Assets/videos/video6.mp4',
                'Title' => 'Videvo | Splash',
                'Description' => 'SPLAAAAAAAAAASH!',
                'PostTime' => Carbon::now(),
                'Views' => 2000,
                'Like' => 1500,
                'Dislike' => 5,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 2,
                'VideoImage' => 'Assets/images/videos/image7.png',
                'VideoLinkEmbedded' => 'Assets/videos/video7.mp4',
                'Title' => 'Yawning Bunny',
                'Description' => 'Start a day by yawning.',
                'PostTime' => Carbon::now(),
                'Views' => 3000,
                'Like' => 2000,
                'Dislike' => 20,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 3,
                'VideoImage' => 'Assets/images/videos/image8.png',
                'VideoLinkEmbedded' => 'Assets/videos/video8.mp4',
                'Title' => 'Lion King',
                'Description' => 'Looks like a lion.',
                'PostTime' => Carbon::now(),
                'Views' => 4000,
                'Like' => 2500,
                'Dislike' => 15,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 4,
                'VideoImage' => 'Assets/images/videos/image9.png',
                'VideoLinkEmbedded' => 'Assets/videos/video9.mp4',
                'Title' => 'Dot Sample Video',
                'Description' => 'A dot.',
                'PostTime' => Carbon::now(),
                'Views' => 1000,
                'Like' => 500,
                'Dislike' => 10,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 5,
                'VideoImage' => 'Assets/images/videos/image10.png',
                'VideoLinkEmbedded' => 'Assets/videos/video10.mp4',
                'Title' => 'Video Editing Gig',
                'Description' => 'Hello everyone.',
                'PostTime' => Carbon::now(),
                'Views' => 2000,
                'Like' => 1500,
                'Dislike' => 5,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'Assets/images/videos/image11.png',
                'VideoLinkEmbedded' => 'Assets/videos/video11.mp4',
                'Title' => 'Cookie Comercial',
                'Description' => 'This is for sample promotional use only.  ',
                'PostTime' => Carbon::now(),
                'Views' => 3000,
                'Like' => 2000,
                'Dislike' => 20,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 2,
                'VideoImage' => 'Assets/images/videos/image12.png',
                'VideoLinkEmbedded' => 'Assets/videos/video12.mp4',
                'Title' => 'Nike - Running Is Not Just Running',
                'Description' => 'This is my first ever proper attempt at a commercial, as every filmmaker knows they go straight to making a Nike commercial this is what I produced by myself.  I had done all of the scouting, storyboarding, and the up most planning went into this project. Filming myself was the hardest part as I could not use any handheld or gimbal movements to create movement within the project. ',
                'PostTime' => Carbon::now(),
                'Views' => 4000,
                'Like' => 2500,
                'Dislike' => 15,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 3,
                'VideoImage' => 'Assets/images/videos/image13.png',
                'VideoLinkEmbedded' => 'Assets/videos/video13.mp4',
                'Title' => 'Panasonic LUMIX FZ80/FZ82 4K Sample Video',
                'Description' => 'Panasonic introduces the new LUMIX FZ80/FZ82 from the popular FZ series that packs a powerful optical zoom and superior controllability including manual operation over photo and video recording. The LUMIX FZ80/FZ82 features the exceptionally versatile LUMIX DC VARIO 20mm ultra wide-angle lens with a 60x optical zoom (35mm camera equivalent: 20-1200mm), which makes it possible to capture dynamic landscape, wild animals and birds from a distance.',
                'PostTime' => Carbon::now(),
                'Views' => 1000,
                'Like' => 500,
                'Dislike' => 10,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 4,
                'VideoImage' => 'Assets/images/videos/image14.png',
                'VideoLinkEmbedded' => 'Assets/videos/video14.mp4',
                'Title' => 'Samsung Galaxy S21 4K Sample Video',
                'Description' => 'This is a sample video taken with the Samsung Galaxy S21.',
                'PostTime' => Carbon::now(),
                'Views' => 2000,
                'Like' => 1500,
                'Dislike' => 5,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 5,
                'VideoImage' => 'Assets/images/videos/image15.png',
                'VideoLinkEmbedded' => 'Assets/videos/video15.mp4',
                'Title' => 'Wildlife Windows 7 Sample Video',
                'Description' => 'All clips is property of Microsoft Windows.',
                'PostTime' => Carbon::now(),
                'Views' => 3000,
                'Like' => 2000,
                'Dislike' => 20,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'Assets/images/videos/image16.png',
                'VideoLinkEmbedded' => 'Assets/videos/video16.mp4',
                'Title' => 'Windows 7 Media Center sample video',
                'Description' => 'This is the sample video of the Media Center thing, located in the Public Recorded TV folder in almost every copy of Windows 7. Hope you enjoy!',
                'PostTime' => Carbon::now(),
                'Views' => 4000,
                'Like' => 2500,
                'Dislike' => 15,
                'VideoType' => 'Videos',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/Vase.png',
                'VideoLinkEmbedded' => 'storage/short_video/Vase.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/beer.png',
                'VideoLinkEmbedded' => 'storage/short_video/beer.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/chem1.png',
                'VideoLinkEmbedded' => 'storage/short_video/chem1.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/chem2.png',
                'VideoLinkEmbedded' => 'storage/short_video/chem2.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/chem3.png',
                'VideoLinkEmbedded' => 'storage/short_video/chem3.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/claybowl.png',
                'VideoLinkEmbedded' => 'storage/short_video/claybowl.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/photo.png',
                'VideoLinkEmbedded' => 'storage/short_video/photo.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/sea.png',
                'VideoLinkEmbedded' => 'storage/short_video/sea.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/tea.png',
                'VideoLinkEmbedded' => 'storage/short_video/tea.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'UserID' => 1,
                'VideoImage' => 'storage/short_video/work.png',
                'VideoLinkEmbedded' => 'storage/short_video/work.mp4',
                'Title' => 'Lorem, ipsum dolor.',
                'Description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia dolorum dignissimos facilis cumque corrupti soluta quisquam adipisci nobis optio alias earum odio, blanditiis tempore pariatur quis eaque nostrum provident quam.',
                'PostTime' => Carbon::now(),
                'Views' => 0,
                'Like' => 0,
                'Dislike' => 0,
                'VideoType' => 'Shorts',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
