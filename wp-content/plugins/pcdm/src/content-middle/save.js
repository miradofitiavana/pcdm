import {RichText, useBlockProps} from '@wordpress/block-editor';

export default function save({attributes}) {

    const blockProps = useBlockProps.save();

    const {contentTitle, contentBody, contentImage, settings} = attributes;
    const {contentLeft} = settings;

    return (
        <div className="container">
            <div className="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                <div
                    className={`${contentLeft ? 'lg:order-last' : ''} relative h-64 overflow-hidden rounded-lg sm:h-80 sm:h-full`}>
                    <img alt={contentTitle} src={contentImage.url}
                         className="absolute inset-0 h-full w-full object-cover"/>
                </div>

                <div className="lg:py-16">
                    <RichText.Content
                        tagName="h2"
                        value={contentTitle}
                    />

                    <RichText.Content
                        tagName="div"
                        className="cadre-body mt-5"
                        value={contentBody}
                    />
                </div>
            </div>
        </div>
    );
}
