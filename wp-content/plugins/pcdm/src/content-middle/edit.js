import {InspectorControls, MediaUpload, RichText, useBlockProps} from '@wordpress/block-editor';
import {FormToggle, PanelBody, PanelRow} from '@wordpress/components';

export default function Edit({attributes, setAttributes}) {

    const blockProps = useBlockProps();

    const {contentTitle, contentBody, contentImage, settings} = attributes;
    const {contentLeft} = settings;

    return (
        <>
            <InspectorControls>
                <PanelBody title="Inverser les blocks">
                    <PanelRow>
                        <label htmlFor="content-left-toggle">Inverser les blocks
                        </label>
                        <FormToggle
                            id="content-left-toggle"
                            label="Inverser les blocks"
                            checked={contentLeft}
                            onChange={() => setAttributes({
                                settings: {...settings, contentLeft: !contentLeft}
                            })}
                        />
                    </PanelRow>
                </PanelBody>
            </InspectorControls>

            <div className="container">
                <div className="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
                    <div
                        className={`${contentLeft ? 'lg:order-last' : ''} relative h-64 overflow-hidden rounded-lg sm:h-80 sm:h-full`}>
                        <MediaUpload
                            onSelect={(contentImage) => setAttributes({contentImage: contentImage})}
                            type="image"
                            value={contentImage}
                            render={({open}) => (
                                <button onClick={open}
                                        className="media-upload z-10 bg-gray-200 p-2 border-gray-400 border rounded-full absolute top-[10px] right-[10px]">
                                    <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                         className="w-5">
                                        <path
                                            d="M5 2H3v3H0v2h3v3h2V7h3V5H5V2zm12 1h-7v2h5v2h5v12H5v-7H3v9h19V5h-5V3zm-7 6h4v2h2v4h-2v2h-4v-2h4v-4h-4V9zm-2 2h2v4H8v-4z"
                                            fill="currentColor"/>
                                    </svg>
                                </button>
                            )}
                        />
                        <img alt={contentTitle} src={contentImage.url}
                             className="absolute inset-0 h-full w-full object-cover"/>
                    </div>

                    <div className="lg:py-16">
                        <RichText
                            tagName="h2"
                            onChange={(contentTitle) => setAttributes({contentTitle: contentTitle})}
                            allowedFormats={['core/bold', 'core/italic']}
                            value={contentTitle}
                            placeholder="Votre texte"
                        />

                        <RichText
                            className="single-page cadre-body mt-5"
                            tagName="div"
                            multiline="p"
                            onChange={(contentBody) => setAttributes({contentBody: contentBody})}
                            allowedFormats={['core/bold', 'core/italic']}
                            value={contentBody}
                            placeholder="Votre texte"
                        />
                    </div>
                </div>
            </div>
        </>
    );
}
