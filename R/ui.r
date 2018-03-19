library(shiny)
library(shinydashboard)

ui<-{
  header <- dashboardHeader(title = "Header")
  sidebar <- dashboardSidebar(h3("Sidebar"))
  body <- dashboardBody(
    h3("Calculatrice"),
    fluidRow(
      column(1),
    actionButton(
      inputId = "I_1", label = "1", width = 2, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
    ),
    actionButton(
      inputId = "I_2", label = "2", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
    ),
    actionButton(
      inputId = "I_3", label = "3", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
    ),
    actionButton(
      inputId = "I_add", label = "+", width = 1, style="color: #fff; background-color: #009900; border-color: #2e6da4"
    )
    ),
    fluidRow(
      column(1),
      actionButton(
        inputId = "I_4", label = "4", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
      ),
      actionButton(
        inputId = "I_5", label = "5", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
      ),
      actionButton(
        inputId = "I_6", label = "6", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
      ),
      actionButton(
        inputId = "I_sous", label = "-", width = 1, style="color: #fff; background-color: #009900; border-color: #2e6da4"
      )
    ),
    fluidRow(
      
      column(1),
      actionButton(
        inputId = "I_7", label = "7", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
      ),
      actionButton(
        inputId = "I_8", label = "8", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
      ),
      actionButton(
        inputId = "I_9", label = "9", width = 1, style="color: #fff; background-color: #337ab7; border-color: #2e6da4"
      ),
      actionButton(
        inputId = "I_multi", label = "X", width = 1, style="color: #fff; background-color: #009900; border-color: #2e6da4"
      )
    ),
    fluidRow(
      column(1),
      actionButton(
        inputId = "I_res", label = "=", width = 115, style="color: #fff; background-color: #009900; border-color: #2e6da4"
      )
    ),
    fluidRow(
      column(1),
      column(1,
             verbatimTextOutput("O_res"))
      )
    )
  dashboardPage( header, sidebar, body)
}