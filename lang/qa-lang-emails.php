<?php
/*
	Question2Answer by Gideon Greenspan and contributors
	http://www.question2answer.org/

	Description: Language phrases for email notifications


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

return array(
'a_commented_body' => "^site_title पर आपके उत्तर पर ^c_handle द्वारा एक नई टिप्पणी है:\n\n^open^c_content^close\n\nआपका उत्तर था:\n\n^open^c_context^close\n\nआप अपनी टिप्पणी जोड़कर प्रतिक्रिया दे सकते हैं:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'a_commented_subject' => 'आपके ^site_title उत्तर में एक नई टिप्पणी है',

'a_followed_body' => "^site_title पर आपके उत्तर में ^q_handle द्वारा एक नया संबंधित प्रश्न है:\n\n^open^q_title^close\n\nआपका उत्तर था:\n\n^open^a_content^close\n\ nनए प्रश्न का उत्तर देने के लिए नीचे क्लिक करें:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'a_followed_subject' => 'आपके ^site_title उत्तर में एक संबंधित प्रश्न है',

'a_selected_body' => "बधाई हो! ^site_title पर आपका उत्तर ^s_handle द्वारा सर्वश्रेष्ठ के रूप में चुना गया है:\n\n^open^a_content^close\n\nप्रश्न था:\n\n^open^q_title^close \n\nअपना उत्तर देखने के लिए नीचे क्लिक करें:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'a_selected_subject' => 'आपका ^site_title उत्तर चुन लिया गया है!',

'c_commented_body' => "^site_title पर आपकी टिप्पणी के बाद ^c_handle द्वारा एक नई टिप्पणी जोड़ी गई है:\n\n^open^c_content^close\n\nचर्चा इस प्रकार है:\n\n^open^c_context^close \n\nआप एक और टिप्पणी जोड़कर जवाब दे सकते हैं:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'c_commented_subject' => 'आपकी ^site_title टिप्पणी इसमें जोड़ दी गई है',

'confirm_body' => "कृपया ^site_title के लिए अपने ईमेल पते की पुष्टि करने के लिए नीचे क्लिक करें।\n\n^url\n\nपुष्टि कोड: ^code\n\n धन्यवाद,\n^site_title",
'confirm_subject' => '^site_title - ईमेल पते की पुष्टि',
 
'feedback_body' => "टिप्पणियाँ:\n^message\n\nनाम::\n^name\n\nईमेल:\n^email\n\nपिछला पृष्ठ:\n^previous\n\nउपयोगकर्ता:\n^url\n\nआईपी पता:\n^ip\n\nब्राउज़र:\n^browser",
'feedback_subject' => '^ feedback',

'flagged_body' => "^p_handle द्वारा एक पोस्ट प्राप्त हुई है ^flags:\n\n^open^p_context^close\n\nपोस्ट देखने के लिए नीचे क्लिक करें:\n\n^url\n\n\nनीचे क्लिक करें सभी चिह्नित पोस्ट की समीक्षा करें:\n\n^a_url\n\n\nधन्यवाद,\n\n^site_title",
'flagged_subject' => '^site_title में एक ध्वजांकित पोस्ट है',

'moderate_body' => "^p_handle की एक पोस्ट को आपकी स्वीकृति की आवश्यकता है:\n\n^open^p_context^close\n\nपोस्ट को स्वीकृत या अस्वीकार करने के लिए नीचे क्लिक करें:\n\n^url\n\n\nनीचे क्लिक करें सभी पंक्तिबद्ध पोस्ट की समीक्षा करने के लिए:\n\n^a_url\n\n\nधन्यवाद,\n\n^site_title",
'moderate_subject' => '^site_title moderation',

'new_password_body' => "^site_title के लिए आपका नया पासवर्ड नीचे है।\n\nपासवर्ड: ^पासवर्ड\n\nलॉग इन करने के तुरंत बाद इस पासवर्ड को बदलने की अनुशंसा की जाती है।\n\nधन्यवाद,\n^site_title\n^ यूआरएल",
'new_password_subject' => '^site_title - आपका नया पासवर्ड',

'private_message_body' => "आपको ^f_handle द्वारा ^site_title पर एक निजी संदेश भेजा गया है:\n\n^open^message^close\n\n^more धन्यवाद,\n\n^site_title\n\n\nTo निजी संदेशों को ब्लॉक करें, अपने खाता पृष्ठ पर जाएँ:\n^a_url",
'private_message_info' => "^f_handle के बारे में अधिक जानकारी:\n\n^url\n\n",
'private_message_reply' => "निजी संदेश द्वारा ^f_handle को उत्तर देने के लिए नीचे क्लिक करें:\n\n^url\n\n",
'private_message_subject' => '^f_handle से ^site_title पर संदेश',

'q_answered_body' => "^site_title पर आपके प्रश्न का उत्तर ^a_handle द्वारा दिया गया है:\n\n^open^a_content^close\n\nआपका प्रश्न था:\n\n^open^q_title^close\n\nयदि आप इस उत्तर की तरह, आप इसे सर्वश्रेष्ठ के रूप में चुन सकते हैं:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'q_answered_subject' => 'आपके ^site_title प्रश्न का उत्तर दे दिया गया',

'q_commented_body' => "^site_title पर आपके प्रश्न पर ^c_handle द्वारा एक नई टिप्पणी है:\n\n^open^c_content^close\n\nआपका प्रश्न था:\n\n^open^c_context^close\n\nआप अपनी टिप्पणी जोड़कर प्रतिक्रिया दे सकते हैं:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'q_commented_subject' => 'आपके ^site_title प्रश्न पर एक नई टिप्पणी है',

'q_posted_body' => "^q_handle द्वारा एक नया प्रश्न पूछा गया है:\n\n^open^q_title\n\n^q_content^close\n\nप्रश्न देखने के लिए नीचे क्लिक करें:\n\n^url\n \nधन्यवाद,\n\n^site_title",
'q_posted_subject' => '^site_title में एक नया प्रश्न है',

'remoderate_body' => "^p_handle द्वारा संपादित पोस्ट को आपकी पुनः स्वीकृति की आवश्यकता है:\n\n^open^p_context^close\n\nसंपादित पोस्ट को स्वीकृत करने या छिपाने के लिए नीचे क्लिक करें:\n\n^url\n\n\ nसभी पंक्तिबद्ध पोस्ट की समीक्षा करने के लिए नीचे क्लिक करें:\n\n^a_url\n\n\nधन्यवाद,\n\n^site_title",
'remoderate_subject' => '^site_title मॉडरेशन',

'reset_body' => "कृपया ^site_title के लिए अपना पासवर्ड रीसेट करने के लिए नीचे क्लिक करें।\n\n^url\n\nवैकल्पिक रूप से, नीचे दिए गए फ़ील्ड में कोड दर्ज करें।\n\nकोड: ^कोड\n\nयदि आपने किया है अपना पासवर्ड रीसेट करने के लिए न कहें, कृपया इस संदेश को अनदेखा करें।\n\nधन्यवाद,\n^साइट_शीर्षक",
'reset_subject' => '^site_title - भूले हुए पासवर्ड को रीसेट करें',

'to_handle_prefix' => "^,\n\n",

'u_registered_body' => "एक नए उपयोगकर्ता ने ^u_handle के रूप में पंजीकरण किया है।\n\nउपयोगकर्ता प्रोफ़ाइल देखने के लिए नीचे क्लिक करें:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'u_registered_subject' => '^site_title में एक नया पंजीकृत उपयोगकर्ता है',
'u_to_approve_body' => "एक नए उपयोगकर्ता ने ^u_handle के रूप में पंजीकरण किया है।\n\nउपयोगकर्ता को स्वीकृत करने के लिए नीचे क्लिक करें:\n\n^url\n\nअनुमोदन की प्रतीक्षा कर रहे सभी उपयोगकर्ताओं की समीक्षा करने के लिए नीचे क्लिक करें:\n\n^a_url \n\nधन्यवाद,\n\n^site_title",

'u_approved_body' => "आप अपनी नई उपयोगकर्ता प्रोफ़ाइल यहां देख सकते हैं:\n\n^url\n\nधन्यवाद,\n\n^site_title",
'u_approved_subject' => 'आपका ^site_title उपयोगकर्ता स्वीकृत हो गया है',

'wall_post_body' => "^f_handle ने आपके उपयोगकर्ता वॉल पर ^site_title:\n\n^open^post^close\n\nआप यहां पोस्ट का जवाब दे सकते हैं:\n\n^url\n\nधन्यवाद ,\n\n^साइट_शीर्षक",
'wall_post_subject' => 'अपनी ^site_title वॉल पर पोस्ट करें',

'welcome_body' => "^साइट_टाइटल के लिए पंजीकरण करने के लिए धन्यवाद।\n\n^custom^confirmआपका लॉगिन विवरण इस प्रकार है:\n\nउपयोगकर्ता नाम: ^हैंडल\nईमेल: ^ईमेल\n\nकृपया इस जानकारी को भविष्य के लिए सुरक्षित रखें संदर्भ.\n\nधन्यवाद,\n\n^site_title\n^url",
'welcome_confirm' => "कृपया अपने ईमेल पते की पुष्टि करने के लिए नीचे क्लिक करें।\n\n^url\n\n",
'welcome_subject' => '^site_title में आपका स्वागत है!',

);
