let routes = [
    {
        path: "*",
        name: "unknown",
        component: Vue.component("NotFoundComponent")
    }
];

let paths = ["example"];

const snakeToCamel = str =>
    (str.charAt(0).toUpperCase() + str.substring(1)).replace(
        /([-_/][a-z])/g,
        group =>
            group
                .toUpperCase()
                .replace("-", "")
                .replace("_", "")
                .replace("/", "")
        // snakeToCamel('my-snake-string'); // MySnakeString
    );

for (let path of paths) {
    let component = Vue.component(snakeToCamel(path) + "Component");
    routes.push({
        path: "/" + path,
        name: path,
        component: component
    });
}

module.exports = routes;
