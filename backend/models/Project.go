type Project struct {
	ID           uint     `json:"id"`
	Title        string   `json:"title"`
	Description  string   `json:"description"`
	Technologies []string `json:"technologies"`
	GithubLink   string   `json:"githubLink"`
}