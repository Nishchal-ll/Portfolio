type Home struct {
	ID          uint   `json:"id"`
	Title       string `json:"title"`
	Description string `json:"description"`
	Image       string `json:"image"` // URL or path
	Github      string `json:"github"`
	Linkedin    string `json:"linkedin"`
	Twitter     string `json:"twitter"`
}