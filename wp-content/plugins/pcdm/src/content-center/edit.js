import {InspectorControls, RichText, useBlockProps} from '@wordpress/block-editor';
import {FormToggle, PanelBody, PanelRow} from '@wordpress/components';

export default function Edit({attributes, setAttributes}) {

    const blockProps = useBlockProps();

    const {preTitle, contentTitle, contentBody, settings} = attributes;
    const {showPreTitle} = settings;

    return (
        <>
            <InspectorControls>
                <PanelBody title="Afficher le PRE-Title">
                    <PanelRow>
                        <label htmlFor="show-pretitle-toggle">Afficher le PRE-Title
                        </label>
                        <FormToggle
                            id="show-pretitle-toggle"
                            label="Afficher le PRE-Title"
                            checked={showPreTitle}
                            onChange={() => setAttributes({
                                settings: {...settings, showPreTitle: !showPreTitle}
                            })}
                        />
                    </PanelRow>
                </PanelBody>
            </InspectorControls>

            <div className="container">
                {showPreTitle ? <RichText className="pre-title !text-center"
                                          tagName="p"
                                          onChange={(preTitle) => setAttributes({preTitle: preTitle})}
                                          value={preTitle}
                                          placeholder="Votre texte"
                /> : ''}

                <RichText
                    tagName="h2"
                    className="!text-center"
                    onChange={(contentTitle) => setAttributes({contentTitle: contentTitle})}
                    allowedFormats={['core/bold', 'core/italic']}
                    value={contentTitle}
                    placeholder="Votre texte"
                />

                <RichText
                    className="cadre-body !text-center mt-5"
                    tagName="div"
                    multiline="p"
                    onChange={(contentBody) => setAttributes({contentBody: contentBody})}
                    allowedFormats={['core/bold', 'core/italic']}
                    value={contentBody}
                    placeholder="Votre texte"
                />
            </div>
        </>
    );
}
