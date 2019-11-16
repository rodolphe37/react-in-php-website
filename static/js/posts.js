console.log("hello the world")

//React
//ReactDom

class LikeButton extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            likes: props.likes || 0,
            isLiked: props.isLiked || false
        };
    }
    render() {
        return React.createElement(
            "button",
            { className: 'btn btn-link'},
            "J'aime !"
            );
    }
}

document.querySelectorAll('span.react-like').forEach(function(span){
    ReactDom.render(React.createElement(LikeButton), span);
});