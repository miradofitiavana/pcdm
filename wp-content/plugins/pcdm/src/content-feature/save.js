import {RichText} from '@wordpress/block-editor';

export default function save({attributes}) {
    const {contentTitle, contentBody, contentContents} = attributes;

    return (
        <div className="container grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div>
                <RichText.Content value={contentTitle} tagName="h2"/>
                <RichText.Content
                    value={contentBody}
                    tagName="div"
                    multiline="p"
                    className="my-4 leading-loose text-gray-500 flex flex-col gap-y-2"
                />
            </div>

            <div className="grid grid-cols-1 gap-y-4">
                {contentContents.map((content, i) =>
                    (
                        <div key={i} className="flex flex-row gap-x-4">
                            <div
                                className="flex items-center justify-center w-16 h-16 mx-auto text-2xl font-bold text-brand-500 rounded-full bg-brand-50">
                                <span className="!text-inherit">{i + 1}</span>
                            </div>
                            <div className="flex-1">
                                <RichText.Content
                                    value={content.h3}
                                    tagName="h3"
                                    className="my-4"
                                />

                                <RichText.Content
                                    value={content.p}
                                    tagName="div"
                                    className="leading-loose text-gray-500"
                                    multiline="p"
                                />
                            </div>
                        </div>
                    )
                )}
            </div>
        </div>
    );
}
