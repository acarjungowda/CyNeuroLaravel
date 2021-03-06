<div class="chatbox chatbox--tray chatbox--empty">
    <div class="chatbox__title">
        <h5><a href="#">VIDURA Advisor</a></h5>
        <!-- minimize button -->
        <button class="chatbox__title__tray">
            <span></span>
        </button>
        <!-- minimize button ends -->
        <!-- Close button which closes the chatbot -->
        <button class="chatbox__title__close">
            <span>
                <svg viewBox="0 0 12 12" width="12px" height="12px">
                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                </svg>
            </span>
        </button>
        <!-- close button ends -->
    </div>
    <div class="chatbox__body" id="chatbox_body_content">
        <div class="chatbox__body__message chatbox__body__message--left">
            <img src="{{asset('images/Vidura.jpg')}}" alt="VIMAN">
            <p>Hello, Welcome to CyNeuro portal, I am VIDURA your virtual agent.How can I help you?</p>
        </div>
        <!-- <div class="chatbox__body__message chatbox__body__message--right">
            <img src="{{asset('images/user_icon.png')}}" alt="User">
            <p>Nulla vel turpis vulputate, tincidunt lectus sed, porta arcu.</p>
        </div> -->
    </div>
    <form class="chatbox__credentials">
        <div class="form-group">
            <label for="inputName">Name:</label>
            <input type="text" class="form-control" id="inputName" required>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email:</label>
            <input type="text" class="form-control" id="inputEmail" required>
        </div>
        <button type="submit" class="btn btn-success btn-block">Enter Chat</button>
    </form>
    <input type="hidden" id="chat_context" name="conversation_id" value="{}">
    <input type="text" id="user_input" name="user_input" class="chatbox__message" placeholder="Write here"></input>
</div>