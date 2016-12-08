class Clock extends React.Component {
  constructor(props) {
    super(props)
    this.state = {date: new Date()}
  }
  componentDidMount() {
    this.timerID = setInterval(() => this.tick(), 1000)
  }
  componentWillUnmount() {
    clearInterval(this.timerID)
  }
  tick() {
    this.setState({ date: new Date() })
  }
  render() {
    return React.createElement("h4", null, "Current time:", this.state.date.toLocaleTimeString(), ".")
  }
}

ReactDOM.render(React.createElement(Clock, null), document.getElementById('testReact'))
