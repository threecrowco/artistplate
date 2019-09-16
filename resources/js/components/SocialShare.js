/* eslint-disable no-unused-vars */
import React from 'react';
import ReactDOM from 'react-dom';
import {
    FacebookShareCount,
    PinterestShareCount,
    VKShareCount,
    OKShareCount,
    RedditShareCount,
    TumblrShareCount,

    FacebookShareButton,
    LinkedinShareButton,
    TwitterShareButton,
    PinterestShareButton,
    VKShareButton,
    OKShareButton,
    TelegramShareButton,
    WhatsappShareButton,
    RedditShareButton,
    EmailShareButton,
    TumblrShareButton,
    LivejournalShareButton,
    MailruShareButton,
    ViberShareButton,
    WorkplaceShareButton,
    LineShareButton,
    WeiboShareButton,
    PocketShareButton,
    InstapaperShareButton,

    FacebookIcon,
    TwitterIcon,
    LinkedinIcon,
    PinterestIcon,
    VKIcon,
    OKIcon,
    TelegramIcon,
    WhatsappIcon,
    RedditIcon,
    TumblrIcon,
    MailruIcon,
    EmailIcon,
    LivejournalIcon,
    ViberIcon,
    WorkplaceIcon,
    LineIcon,
    PocketIcon,
    InstapaperIcon,
} from 'react-share';

function SocialShare() {
    return (
        <div className="p-4 m-2 rounded bg-gray-200 flex items-center">
            <FacebookShareButton
                className="mr-6"
                url="https://google.com"
                quote="Google">
                <FacebookIcon
                    size="32"
                    round />
            </FacebookShareButton>
            <TwitterShareButton
                className="mr-6"
                url="https://google.com"
                quote="Google">
                <TwitterIcon
                    size="32"
                    round />
            </TwitterShareButton>
            <RedditShareButton
                className="mr-6"
                url="https://google.com"
                quote="Google">
                <RedditIcon
                    size="32"
                    round />
            </RedditShareButton>
        </div>
    );
}

export default SocialShare;

if (document.getElementById('social-share')) {
    ReactDOM.render(<SocialShare />, document.getElementById('social-share'));
}
