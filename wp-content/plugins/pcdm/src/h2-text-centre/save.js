import {RichText, useBlockProps} from '@wordpress/block-editor';

export default function save({attributes}) {

    const blockProps = useBlockProps.save();

    const {preTitle, contentTitle, contentBody, settings} = attributes;
    const {showPreTitle} = settings;

    return (
        <section {...blockProps}>
            <div>
                {showPreTitle ? <RichText.Content className="pre-title" value={preTitle} tagName="p"/> : ''}
                <RichText.Content
                    tagName="h2"
                    value={contentTitle}
                />
                <RichText.Content
                    tagName="div"
                    className="cadre-body"
                    value={contentBody}
                />
            </div>
        </section>
    );
}
