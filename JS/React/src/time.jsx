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
    return <h4>Current time:{this.state.date.toLocaleTimeString()}.</h4>
  }
}

ReactDOM.render(<Clock />, document.getElementById('testReact'))
