

export const getDynamicUrl = (path) =>  {

    path = path.replace(/^\/?/, '')

    if(path === '') return '';

    return new URL(`/resources/${path}`, import.meta.url).href;
}
